<?php
session_start();

unset($_SESSION['MEMBER']);

header('Location: http://localhost/UTS_PWL_AnnisaNR/index.php?hal=home');