<?php
declare(strict_types=1);
include 'bookedTest.php';
include 'finishedTest.php';
include 'user.php';
class Database
{
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'covid_database';
    private const DB_USER = 'root';
    private const DB_PASS = 'dtb456';
    private $database;
    public function __construct()
    {
        try  {
            $this->database = new PDO('mysql:dbname=' . self::DB_NAME . ';host=' . self::DB_HOST , self::DB_USER, self::DB_PASS);
        } catch (PDOException $e ) {
            echo 'Error while connecting to database: ' . $e->getMessage();
        }
    }
    public function validLogin(string $birthNumber, string $password) : bool {
        $birthNumbers = [];
        $birthNumbers = $this->database->query('SELECT * FROM users');
        $result = false;
        foreach ($birthNumbers as $row) {
            if(strcmp($row['BIRTH_NUMBER'],$birthNumber) == 0) {
                if(strcmp($row['PASSWORD'],$password) == 0) {
                    $result = true;
                }
            }
        }
        return $result;
    }
    public function getUser(string $birthNumber) : User {
        $birthNumber = "\"" . $birthNumber;
        $birthNumber .= "\"";
        $bookedTestsFetched = [];
        $bookedTestsFetched = $this->database->query('SELECT * FROM booked_tests WHERE (ORDERING_USER = ' . $birthNumber . ')');
        $bookedTests = [];
        foreach ($bookedTestsFetched as $test) {
            $newBookedTest = new BookedTest("" . $test['ORDER_DATE'] , $test['TYPE'], $test['ORDERING_USER']);
            $bookedTests[] = $newBookedTest;
        }
        $finishedTestsFetched = [];

        $finishedTestsFetched = $this->database->query('SELECT * FROM finished_tests WHERE (TESTED_USER = ' . $birthNumber . ')');
        $finishedTests = [];
        foreach ($finishedTestsFetched as $test) {
            $testResult = false;
            if($test['RESULT'] == 1) {
                $testResult = true;
            }
            $newFinishedTest = new FinishedTest("" . $test['ORDER_TEST'] , $test['TEST_DATE'],$test['TYPE'],$testResult, $test['TESTED_USER']);
            $finishedTests[] = $newFinishedTest;
        }
        $userInfo = [];
        $userInfo = $this->database->query('SELECT * FROM  users WHERE BIRTH_NUMBER='. $birthNumber .';');
        $userInfo = $userInfo->fetch();
        return new User($birthNumber,$userInfo['NAME'],$userInfo['SURNAME'],$bookedTests,$finishedTests,$userInfo['PASSWORD']);

    }
    public function bookTest(string $birthNumber , string $date , string $type) : void{
        $statement = "INSERT INTO booked_tests (ORDERING_USER , ORDER_DATE , TYPE  ) VALUES('". $birthNumber ."' , STR_TO_DATE('" . $date . "'" . " , '%d %m %Y' "  . " ) , " . "'" . $type . "');";
        $this->database->exec($statement);

    }
}