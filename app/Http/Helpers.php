<?php

function gender($id) {
    return ['male', 'female'][$id];
}

function race_image($gender, $race) {
    return '/img/' . gender($gender) . '_' . [
        1 => "human",
        2 => "orc",
        3 => "dwarf",
        4 => "nightelf",
        5 => "undead",
        6 => "tauren",
        7 => "gnome",
        8 => "troll",
        10 => "bloodelf",
        11 => "draenei"
    ][$race] . '.png' ?? '';
}

function class_image($class) {
    return '/img/' . [
        1 => "warrior",
        2 => "paladin",
        3 => "hunter",
        4 => "rogue",
        5 => "priest",
        7 => "shaman",
        8 => "mage",
        9 => "warlock",
        11 => "druid"
    ][$class] . '.png' ?? '';
}

function race_name($race) {
    return [
        1 => "Human",
        2 => "Orc",
        3 => "Dwarf",
        4 => "Night Elf",
        5 => "Undead",
        6 => "Tauren",
        7 => "Gnome",
        8 => "Troll",
        10 => "Blood Elf",
        11 => "Draenei"
    ][$race] ?? '';
}

function class_name($class) {
    return [
        1 => "Warrior",
        2 => "Paladin",
        3 => "Hunter",
        4 => "Rogue",
        5 => "Priest",
        7 => "Shaman",
        8 => "Mage",
        9 => "Warlock",
        11 => "Druid"
    ][$class] ?? '';
}

function money($copper) {
    $gold = $copper / 10000;
    $silver = $copper / 100;
    $copper = $copper % 100;
    return sprintf("%dg%ds%dc", $gold, $silver, $copper);
}
