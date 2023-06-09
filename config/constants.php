<?php

//Account status
const ACCOUNT_NOT_SOLD=0;
const ACCOUNT_SOLD=1;

//Products
//product status
const PRODUCT_HOT_STATUS = 1;
const PRODUCT_NEW_STATUS=2;
const PRODUCT_SALE_STATUS = 3;
const PRODUCT_NONE_STATUS = 0;

//Category
const CATEGORY_DEFAULT_COLOR = '#FED166';

//Payment id
const PAYMENT_TYPE_VIETCOMBANK=1;
const PAYMENT_TYPE_MOMO=2;
const PAYMENT_TYPE_MB=3;

const PAYMENT_METHOD_NAME =[
    '',
    'Ngân hàng Vietcombank',
    'Ví điện tử MOMO',
    'Ngân hàng Quân đội MB',
];

const PRE_CODE = 'PAYITECH';


//waiting payment response code
const PAYMENT_DONE= 1;
const PAYMENT_NOT_TRUE= 2;
const PAYMENT_UNAVAILABLE= 2;


//Checkout Status
const CHECKOUT_PENDING=0;
const CHECKOUT_DONE=1;
const CHECKOUT_TIME_OUT=2;
