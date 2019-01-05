<?php

class School {
    
    private $highSchool = "";
    private $university = "";

    public function setSchool($high, $univ) {
        $this->highSchool = $high;
        $this->university = $univ;
    }

    public function getSchool() {
        $data = array(
            'highSchool' => $this->highSchool,
            'university' => $this->university
        );
        return $data;
    }

}

class Skill {
    public $skill_name = "";
}

class Satu {

    public $name = "";
    public $address = "";
    public $hobbies = array();
    public $is_married = false;
    public $school;
    public $skill;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName($name) {
        return $this->name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress($address) {
        return $this->address;
    }

    public function setHobbies($hobbies) {
        $this->hobbies = $hobbies;
    }

    public function getHobbies($hobbies) {
        return $this->hobbies;
    }

    public function setIsMarried($is_married) {
        $this->is_married = $is_married;
    }

    public function getIsMarried($is_married) {
        return $this->is_married;
    }

    public function setSchool($school) {
        $this->school = $school;
    }

    public function getSchool($school) {
        return $this->school;
    }

    public function setSKill($skill) {
        $this->skill = $skill;
    }

    public function getSKill($skill) {
        return $this->skill;
    }

    public function tampil_biodata() {
        $bio = array(
            'name' => $this->name,
            'address' => $this->address,
            'hobbies' => $this->hobbies,
            'is_married' => $this->is_married,
            'school' => $this->school,
            'skill' => $this->skill
        );

        return json_encode($bio);
    }

}

$school = new School;
$school->setSchool('SMKN 2 Guguak', 'Belum Kuliah');
$school_data = $school->getSchool();

$skill_list = ['PHP','Javascript','OOP'];

for($i = 0; $i < count($skill_list); $i++) {
    $skill[$i] = new Skill;
    $skill[$i]->skill_name = $skill_list[$i];
}

$biodata = new Satu;
$biodata->setName("Noval Vatria Yezu");
$biodata->setAddress("Padang");
$biodata->setHobbies(['Sepak Bola','Game','Coding','Music']);
$biodata->setIsMarried(false);
$biodata->setSchool($school_data);
$biodata->setSKill($skill);

echo $biodata->tampil_biodata();

?>
