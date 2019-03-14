<?php
include 'ContactInformation.php';
function getID()
{
    $file_name = 'ids';
    if (!file_exists($file_name)) {
        touch($file_name);
        $handle = fopen($file_name, 'r+');
        $id = 0;
    } else {
        $handle = fopen($file_name, 'r+');
        $id = fread($handle, filesize($file_name));
        settype($id, 'integer');
    }
    rewind($handle);
    fwrite($handle, ++$id);
    fclose($handle);
    return $id;
}

function readFromFile($file_name)
{
    if (!file_exists($file_name)) {
        return null;
    }
    $handle = fopen($file_name, 'r+');
    $content = fread($handle, filesize($file_name));
    fclose($handle);
    return $content;
}

function getContacts($file_name)
{
    $contacts = readFromFile($file_name);
    return unserialize($contacts);
}

function writeToFile($file_name, $serializedData)
{
    if (!file_exists($file_name)) {
        touch($file_name);
        $handle = fopen($file_name, 'r+');
        fwrite($handle, $serializedData);
        fclose($handle);
        return true;
    }
    return false;
}

function writeContacts($filename, $contacts)
{
    return writeToFile($filename, serialize($contacts));
}

function deleteContact($file_name, $id)
{
    $contacts = getContacts($file_name);
    unset($contacts[$id]);
    return writeContacts($file_name, $contacts);
}

function editContact($file_name, $id, $contact)
{
    $contacts = getContacts($file_name);
    $contacts[$id] = $contact;
    return writeContacts($file_name, $contacts);
}

function getContact($file_name, $id)
{
    $contacts = getContacts($file_name);
    return $contacts[$id];
}

function addContact($file_name, $contact)
{
    $contacts = getContacts($file_name);
    $contacts[getID()] = $contact;
    writeContacts($file_name, $contacts);
}

function searchContact($file_name, $searchValue)
{
    $contacts = getContacts($file_name);
    $resultArray = array();
    foreach ($contacts as $id => $ct) {
        if ((strlen($ct->title) >= strlen($searchValue) && substr(($ct->title), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->firstname) >= strlen($searchValue) && substr(($ct->firstname), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->lastname) >= strlen($searchValue) && substr(($ct->lastname), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->email) >= strlen($searchValue) && substr(($ct->email), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->site) >= strlen($searchValue) && substr(($ct->site), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->cellNumber) >= strlen($searchValue) && substr(($ct->cellNumber), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->homeNumber) >= strlen($searchValue) && substr(($ct->homeNumber), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->officeNumber) >= strlen($searchValue) && substr(($ct->officeNumber), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->twitterUrl) >= strlen($searchValue) && substr(($ct->twitterUrl), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->facebookUrl) >= strlen($searchValue) && substr(($ct->facebookUrl), 0, strlen($searchValue)) === $searchValue)
            || (strlen($ct->comment) >= strlen($searchValue) && substr(($ct->comment), 0, strlen($searchValue)) === $searchValue)
        ) {
            $resultArray[$id] = $ct;
        }

    }
    return $resultArray;
}
