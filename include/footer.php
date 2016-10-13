  <style type="text/css">
    .page-footer{
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  
  </style>
		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Hér er Footer</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Gott að vita</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Aðrar myndir</a></li>                  
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <p>&copy;
              <?php
                $startYear = 2016;
                $thisYear = date('Y');
                if ($startYear == $thisYear) {
                 echo $startYear;
                } else {
                 echo "{$startYear}&ndash;{$thisYear}";
                }
              ?>
              Sveinn Máni Jónsson
            </p>            
            </div>
          </div>
        </footer>
