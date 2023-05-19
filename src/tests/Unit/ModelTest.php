<?php
declare(strict_types=1);

namespace Tests\Unit;

use MyApp\Models\Users;

class ModelTest extends AbstractUnitTest
{
    // generator.cpp file has been used to generate the test cases (present inside "tests/unit/")
    public static function addUserDataProvider(): array
    {
        return [
            ["mddurddi", "obqfspvco@mail.com", "lcvdrzk"],
            ["kwlyiqdchg", "rgyt@mail.com", "dnobqc"],
            ["deqj", "stmepxcan@mail.com", "ewqmoxkjw"],
            ["ymqo", "luxedvywhc@mail.com", "ghotpusfg"],
            ["estckrpa", "gocfufb@mail.com", "biyrrffmw"],
            ["eeimidfn", "zcphkflpbq@mail.com", "vtdwlud"],
            ["gaun", "fzo@mail.com", "hbxif"],
            ["prwcjz", "dxn@mail.com", "tacwt"],
            ["ypweu", "vegybo@mail.com", "sfxqhipbo"],
            ["pufpxckica", "hufczma@mail.com", "cgwigmr"],
            ["cteq", "bwbaami@mail.com", "oqlivnj"],
            ["oomwkuczn", "dgztqars@mail.com", "rgkwu"],
            ["heyvohl", "tjqpo@mail.com", "djslkoel"],
            ["ynzeavaac", "azuimyd@mail.com", "pvmgyxb"],
            ["hppuunktt", "qtm@mail.com", "anuuvjva"],
            ["mvvuvsvh", "kywhmgch@mail.com", "vdcqdpmzm"],
            ["wneik", "fgtant@mail.com", "lpwzvahnvk"],
            ["lpfaotxn", "exrfczzdm@mail.com", "szlobiokv"],
            ["wkxl", "xblvotzo@mail.com", "eqlftxzlz"],
            ["bcsqm", "ciaz@mail.com", "rzyeup"],
            ["vdkbtwhp", "gcwtey@mail.com", "wkbyub"],
            ["ruws", "shxp@mail.com", "jrhfa"],
            ["dibzbf", "pdksbhtaa@mail.com", "zsorbn"],
            ["pzcxecvjm", "jqdjhgv@mail.com", "jcukfj"],
            ["zacbpn", "oppvtle@mail.com", "jpyny"],
            ["vuefyyrdja", "jegbsy@mail.com", "jomfbrnk"],
            ["lzhsvbwcz", "tdf@mail.com", "irbosvmjfc"],
            ["mdrzqz", "pge@mail.com", "jaojyjo"],
            ["eywi", "qdackdawi@mail.com", "xysjqz"],
            ["cipt", "ncjtjhrtvk@mail.com", "wojbq"],
            ["jjfk", "oaccenrx@mail.com", "hcsan"],
            ["tgxd", "ttnujvfsc@mail.com", "wqtyuynmxw"],
            ["bqxorquow", "hpmd@mail.com", "jlrlcn"],
            ["yoywbmvzhx", "enhv@mail.com", "vthfivkhf"],
            ["bqaquyetwi", "thnsxr@mail.com", "goqbhxi"],
            ["svzzs", "qutmszf@mail.com", "jnmtaeqtm"],
            ["kcbrzkjuh", "tznluiyokf@mail.com", "vst"]
        ];
    }

    /**
     * @dataProvider addUserDataProvider
     */
    public function testAddUser($name, $email, $pass)
    {
        $user = new Users();
        $user->name = $name;
        $user->mail = $email;
        $user->password = $pass;
        $success = $user->save();
        $this->assertEquals($success, true);
    }

    public function testDeleteUser()
    {
        $user = new Users();
        $curr = $user::findFirst();
        $user->id = $curr->id;
        $user->delete();
    }

    public function testUpdateUser()
    {
        $user = new Users();
        $curr = $user::findFirst();
        $curr->name = "Ayush";
        $curr->mail = "ayush@gmail.com";
        $curr->password = "ayushgupta";
        $curr->update();
    }
}
