<?php
class MstStudent{
 
    // database connection and table name
    private $conn;
    private $table_name = "MstStudent";
 
    // object properties
    public $MSD_ACHIEVEMENTS;
    public $MSD_ALTMOBILE;
    public $MSD_CITY;
    public $MSD_COMMENTS;
    public $MSD_CREATEDDATETIME;
    public $MSD_DOB;
    public $MSD_DPURL;
    public $MSD_EDU1BOARD;
    public $MSD_EDU1CITY;
    public $MSD_EDU1MED;
    public $MSD_EDU1PERCENTAGE;
    public $MSD_EDU1QUAL;
    public $MSD_EDU1SCHOOL;
    public $MSD_EDU1YEAR;
    public $MSD_EDU2BOARD;
    public $MSD_EDU2CITY;
    public $MSD_EDU2MED;
    public $MSD_EDU2PERCENTAGE;
    public $MSD_EDU2QUAL;
    public $MSD_EDU2SCHOOL;
    public $MSD_EDU2YEAR;
    public $MSD_EDU3BOARD;
    public $MSD_EDU3CITY;
    public $MSD_EDU3MED;
    public $MSD_EDU3PERCENTAGE;
    public $MSD_EDU3QUAL;
    public $MSD_EDU3SCHOOL;
    public $MSD_EDU3YEAR;
    public $MSD_EMAIL;
    public $MSD_FATHERNAME;
    public $MSD_GENDER;
    public $MSD_ISACTIVE;
    public $MSD_IsHSC;
    public $MSD_ISMODIFIED;
    public $MSD_IsSSC;
    public $MSD_IsUG;
    public $MSD_LOCALITY;
    public $MSD_NAME;
    public $MSD_PIN;
    public $MSD_PK;
    public $MSD_PRIMARYMOBILE;
    public $MSD_PROOFURL;
    public $MSD_REGNO;
    public $MSD_REQUESTEDDATE;
    public $MSD_STATE;
    public $MSD_STREETADRS;
    public $MSD_TERMSAPPROVED;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}