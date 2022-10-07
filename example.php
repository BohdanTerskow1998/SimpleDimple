<?php 

  # -------------------- Contets -------------------- #

      // 1. assertContains - 22
      // 2. assertArrayHasKey - 32
      // 3. expectException - 42
      // 4. assertTrueOrFalse - 52
      // 5. assertPDO - 60
      // 6. assertEqualsAndIdentical - 68
      // 7. assertMYSQL - 76
      // 8. assertGetType - 84
      // 9. assertEmailType - 92
      // 10. assertMethodHasArgument - 99

  # -------------------- end Contets -------------------- #


  require 'SimpleDimple/SimpleDimple.php';


  /*

    $array = array("Ivan", "Petro");
    $value = "Petro";
    $TestClassAssertContains = new TestClassAssertContains();
    $TestClassAssertContains->assertContains($array, $value); // true

  */


  /*

    $array = array("Dnipro" => "Ukraine", "Pekin" => "China");
    $value = "Pekin";
    $TestClassAssertArrayHasKey = new TestClassAssertArrayHasKey();
    $TestClassAssertArrayHasKey->assertArrayHasKey($array, $value); // true

  */


  /*

    $first = 10;
    $second = 0;
    $TestClassExpectException = new TestClassExpectException();
    $TestClassExpectException->expectException($first, $second); // Sorry, but you are using nil as a second argument!

  */


  /* 

    $TestClassTrueOrFasle = new TestClassTrueOrFasle();
    $TestClassTrueOrFasle->assertTrueOrFalse("Hello, world!"); // 1 (we found word world)

  */


  /* 

    $TestClassPDO = new TestClassPDO();
    $TestClassPDO->assertPDO("mysql", "root", ""); // Connection successfully! (server: localhost)

  */


  /* 

    $TestClassAssertEqualsAndIdentical = new TestClassAssertEqualsAndIdentical();
    $TestClassAssertEqualsAndIdentical->assertEqualsAndIdentical(10, "10"); // bool(true) bool(false)

  */


  /* 

    $TestClassAssertMYSQL = new TestClassAssertMYSQL();
    $TestClassAssertMYSQL->assertMYSQL("localhost", "root", "", "mysql"); // Connection successfully! Your MYSOL-version: 5.7.33-log. Your host: 5.7.33-log. ...

  */


  /* 

    $TestClassAssertGetType = new TestClassAssertGetType();
    $TestClassAssertGetType->assertGetType("variable"); // Your variable is string.

  */


  /* 

    TestClassAssertEmailType::assertEmailType("user@gmail.com"); // string(14) "user@gmail.com"

  */


  /* 

    TestClassAssertMethodHasArgument::assertMethodHasArgument(10, 20); // 10; 20;

  */
