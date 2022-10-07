<?php





	# -------------------- Contets -------------------- #

		// 1. assertContains - 26 
		// 2. assertArrayHasKey - 43
		// 3. expectException - 60
        // 4. assertTrueOrFalse - 96
        // 5. assertPDO - 119
        // 6. assertEqualsAndIdentical - 141
        // 7. assertMYSQL - 157
        // 8. assertGetType - 189
        // 9. assertEmailType - 203
        // 10. assertMethodHasArgument - 218

	# -------------------- end Contets -------------------- #





	/*
	** assertContains is used to assert an array having a value. This assertion will return true in the case if the array contains the provided value else return false.
	*/
    class TestClassAssertContains
    {
        public function assertContains($array, $value)
        {
            $example = implode("", $array);
            $result = strpos($example, $value);
            echo ($result === false) ? "false" : "true";
        }
    } 





    /*
    ** assertArrayHasKey is used to assert an array having a key. This assertion will return true in the case if the array contains the provided key else return false.
    */
    class TestClassAssertArrayHasKey
    {
        public function assertArrayHasKey($array, $value)
        {
            $example = implode("", array_flip($array));
            $result = strpos($example, $value);
            echo ($result === false) ? "false" : "true";
        }
    }





    /*
    ** expectException is used to change the normal flow of the code execution if a specified error (exceptional) condition occurs.
    */ 
    class SubjectExpectException
    {
        public function example($first, $second)
        {
            if($second !== 0)
            {
                echo $first/$second;
            }
            else 
            {
                throw new Exception('Sorry, but you are using nil as a second argument!');
            }
        }
    }

    class TestClassExpectException 
    {
        public function expectException($first, $second)
        {
            $subject = new SubjectExpectException();

            try {
                $example = $subject->example($first, $second);
            } catch(Exception $e) {
                echo $e->getMessage();
            }
        }
    }





    /*
    ** assertTrueOrFalse is used to checking your arguments with settings and return boolean answer.
    */ 
    class TestClassTrueOrFasle 
    {
        public function assertTrueOrFalse($str)
        {
            $find = preg_match('/world/i', $str);

            if(!$find) 
            {
                echo false;
            }
            else {
                echo true;
            }
        }
    }





    /*
    ** assertPDO is used to give answer about users database existing
    */ 
    class TestClassPDO
    {
        public function assertPDO($dbname, $username, $pass)
        {
            $db = new PDO("mysql:localhost;dbname=$dbname", "$username", "$pass");
            try {
                if($db) {
                    echo "Connection successfully!";
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }





    /*
    ** assertEqualsAndIdentical using to compare two arguments on "==" and "==="
    */ 
    class TestClassAssertEqualsAndIdentical
    {
        public function assertEqualsAndIdentical($first_arg, $second_arg)
        {
            var_dump($first_arg == $second_arg);
            var_dump($first_arg === $second_arg);
        }
    }





    /*
    ** assertMYSQL is used to give answer about users database existing
    */
    class TestClassAssertMYSQL
    {
        public function assertMYSQL($host, $username, $pass, $dbname)
        {
            @$mysqli = new mysqli("$host", "$username", "$pass", "$dbname");

            if($mysqli->connect_error)
            {
                die("Error #$mysqli->connect_errno. $mysqli->connect_error.");
            } 

            else
            {
                echo "Connection successfully! Your MYSOL-version: $mysqli->server_info. Your host: $mysqli->server_info.<br />";
            }

            $table = $mysqli->query("SHOW TABLES;");

            while($row = $table->fetch_row())
            {
                echo "Table: $row[0] <br />";
            }
        }
    }





    /*
    ** assertGetType is used in order to get variable type
    */
    class TestClassAssertGetType
    {
        public function assertGetType($variable)
        {
            echo "Your variable is ".gettype($variable).".";
        }
    }




    /*
    ** assertEmailType is checking your string, if it's email, so true, other - false
    */
    class TestClassAssertEmailType
    {
        static public function assertEmailType($email)
        {
            var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
        } 
    }





    /*
    ** assertMethodHasArgument is showing arguments, which existing in the methods
    */
    class TestClassAssertMethodHasArgument
    {
        static public function assertMethodHasArgument()
        {
            $nums = func_num_args();
            $args = func_get_args();
            for($i = 0; $i < $nums; $i++)
            {
                echo $args[$i]."; ";
            }
        }
    }