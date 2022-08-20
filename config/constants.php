<?php
// App Root
define('APPROOT', dirname(dirname(__FILE__)));
const UPLOAD_PATH = APPROOT . "/public\img\\uploaded_data";

// URL Root
const URLROOT = 'https://localhost/Rokan/';
// Front URL Roots
const PUBLIC_PATH = URLROOT . "public/";
const FONTS_PATH = URLROOT . "public/fonts/";
const IMG_PATH = URLROOT . "public/img/";
const CSS_PATH = URLROOT . "public/css/";
const JS_PATH = URLROOT . "public/js/";
// Dashboard URL Roots
const DASHBOARD_PATH = PUBLIC_PATH . "dashboard/";
const D_CSS_PATH = DASHBOARD_PATH . "css/";
const D_JS_PATH = DASHBOARD_PATH . "js/";
const D_IMG_PATH = DASHBOARD_PATH . "img/";

// Site Name
const SITENAME = 'Rokan Design';

// Social Media Links
const FACEBOOK_LINK = 'https://www.facebook.com/';
const TWITTER_LINK = 'https://twitter.com/';
const INSTAGRAM_LINK = 'https://instagram.com/';
const YOUTUBE_LINK = 'https://www.youtube.com/';
const WHATSAPP_LINK = 'https://www.whatsapp.com/';
const PINTEREST_LINK = 'https://www.pinterest.com/';


//////////////////////////////////////////////////////////////////////////////////////////

// CRUD Operations Alert Messages
const EMPTY_FIRST_NAME = "Firstname Can't Be <strong>Empty</strong>";
const FIRST_NAME_3 = "Firstname Can't Be Less Than <strong>4 Characters</strong>";
const FIRST_NAME_20 = "Firstname Can't Be More Than <strong>20 Characters</strong>";

const EMPTY_LAST_NAME = "Lastname Can't Be <strong>Empty</strong>";
const LAST_NAME_3 = "Lastname Can't Be Less Than <strong>4 Characters</strong>";
const LAST_NAME_20 = "Lastname Can't Be More Than <strong>20 Characters</strong>";

const EMPTY_EMAIL = "Email Can't Be <strong>Empty</strong>";
const EXIST_EMAIL = "Email Is <strong>Exist</strong>";

const EMPTY_PASSWORD = "Password Can't Be <strong>Empty</strong>";

const EMPTY_MOBILE = "Mobile Can't Be <strong>Empty</strong>";

const WRONG_DATA = 'Wrong Informations Try Again Or Signup';
const ACCOUNT_CREATED = 'Account Created Successfully';
const EVENT_CRATED = 'Event Created Successfully';