<?php
session_unset();
session_destroy();
header('Location: login.php?status=loggedout');
