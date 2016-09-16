<?php

class Oauth2 {
    //user
    function CreatUser($DataArr) {
        global $zbp;
        $sql = $zbp->db->sql->Insert($GLOBALS['table']['plugin_oauth2_user'], $DataArr);
        $zbp->db->Insert($sql);
    }

    function CheckUserName($UserName) {
        /*
         * true=OK,false=denied
         */
        return empty($this->GetUserByName($UserName));
    }

    function CheckInvcode($Invcode) {
        /*
         * true=OK,false=denied
         */
        return empty($this->GetUserByInvcode($Invcode));
    }

    function ChangeUserStatus($uid, $Status, $Notice) {
        if (!isset($uid) || $uid === "") {
            throw new Exception("No Uid Set!", 1);
        } elseif (empty($Status)) {
            throw new Exception("No Status Set!", 1);
        }
        global $zbp, $jrp;
        $array = array('status' => $Status);
        $where = array(array('=', 'uid', $uid));
        $sql = $zbp->db->sql->Update($GLOBALS['table']['plugin_oauth2_user'], $array, $where);
        $zbp->db->Update($sql);
        $jrp->ChangeStatus(true);
        $jrp->SetHint("good", $Notice);
        $jrp->SendJsonWithDie();
    }

    function GetUserList($str = null, $value = null) {
        global $zbp;
        $where = null;
        if (!empty($str)) $where = array(array('=', $str, $value));
        $sql = $zbp->db->sql->Select($GLOBALS['table']['plugin_oauth2_user'], '*', $where);
        $array = $zbp->GetListCustom($GLOBALS['table']['plugin_oauth2_user'], $GLOBALS['datainfo']['plugin_oauth2_user'], $sql);
        return $array;
    }

    function GetUserByName($UserName) {
        return $this->GetUserList("name", $UserName);
    }

    function GetUserByInvcode($Invcode) {
        return $this->GetUserList('invcode', $Invcode);
    }

    function GetUserByUid($uid) {
        return $this->GetUserList('uid', $uid);
    }

    function GetUserLastLogin($uid) {
        global $zbp;
        $where = array(array('=', 'uid', $uid));
        $order = array('time' => 'DESC');
        $sql = $zbp->db->sql->Select($GLOBALS['table']['plugin_oauth2_history'], '*', $where, $order, null, null);
        $array = $zbp->GetListCustom($GLOBALS['table']['plugin_oauth2_history'], $GLOBALS['datainfo']['plugin_oauth2_history'], $sql);
        return $array;
    }

    function UpdateUser($uid, $DataArr) {
        global $zbp;
        $where = array(array('=', 'uid', $uid));
        $sql = $zbp->db->sql->Update($GLOBALS['table']['plugin_oauth2_user'], $DataArr, $where);
        $zbp->db->Update($sql);
    }

    //Group
    function CreatGroup($DataArr) {
        global $zbp;
        $sql = $zbp->db->sql->Insert($GLOBALS['table']['plugin_oauth2_group'], $DataArr);
        $zbp->db->Insert($sql);
    }

    function GetGroupList($str = null, $value = null) {
        global $zbp;
        $where = null;
        if (!empty($str)) $where = array(array('=', $str, $value));
        $sql = $zbp->db->sql->Select($GLOBALS['table']['plugin_oauth2_group'], '*', $where);
        $array = $zbp->GetListCustom($GLOBALS['table']['plugin_oauth2_group'], $GLOBALS['datainfo']['plugin_oauth2_group'], $sql);
        return $array;
    }

    function GetGroupByName($gname) {
        return $this->GetGroupList('gname', $gname);
    }

    function UpdateGroupInfo($gid, $DataArr) {
        global $zbp;
        $where = array(array('=', 'gid', $gid));
        $sql = $zbp->db->sql->Update($GLOBALS['table']['plugin_oauth2_group'], $DataArr, $where);
        $zbp->db->Update($sql);
    }

    //history
    function GetHistoryList($order = null) {
        global $zbp;
        if (empty($order)) $order = array('time' => 'ASC');//'sean_IsUsed' => 'DESC',
        $sql = $zbp->db->sql->Select($GLOBALS['table']['plugin_oauth2_history'], '*', null, $order, null, null);
        $array = $zbp->GetListCustom($GLOBALS['table']['plugin_oauth2_history'], $GLOBALS['datainfo']['plugin_oauth2_history'], $sql);
        return $array;
    }
}