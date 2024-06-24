<?php

function construct() {
    load_model('index');
    load('lib', 'validation');
}

function indexAction() {
    // load_view('index');
}

function listOrderAction() {
    load_view('listOrder');
}

function listCustomerAction() {
    load_view('listCustomer');
}
