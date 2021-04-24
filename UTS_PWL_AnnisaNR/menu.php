        <!--Menu-->
        <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PassionIT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?hal=home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="index.php?hal=aboutus">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pegawai
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?hal=dataPegawai">Data Pegawai</a></li>
                    </ul>
                    </li>
                    <?php
                    $member=isset($_SESSION['MEMBER']) ?
                    $_SESSION['MEMBER'] : null;
                    if (!isset($member)) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?hal=login" tabindex="-1">Login</a>
                    </li>
                    <?php
                    } else {
                    ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?= $member['fullname']; ?>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                         <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Anda akan logout')">Logout</a></li>
                      </ul>
                    </li>
                    <?php } ?>

                </ul>
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
                </ul>
      

                </div>
            </div>
            </nav>
        </div>