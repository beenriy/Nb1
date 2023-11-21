

  <?php 
  $client = new Soapjatekosok_Model('http://localhost/nb1/models/soapjatekosok_model.wsdl');
  $jatekosok = $client->getjatekosok();
  if(isset($viewdata['jatekos']) && trim($viewdata['jatekos']) != "")
    $csapatok = $client->getcsapatok($viewdata['jatekos']);
    $posztok = $client->getposztok($viewdata['jatekos']);
  ?>
    
  <body>
    <h1>Játékosok</h1>
    <form name="jatekosselect"  action="<?= SITE_ROOT ?>soap"  method="POST">
      <select name="jatekos" onchange="javascript:jatekosselect.submit();">
        <option value="">Válasszon ...</option>
        <?php
          foreach($jatekosok->jatekosok as $jatekos)
          {
            echo '<option value="'.$jatekos['utonev'].'">'.$jatekos['vezeteknev'].'</option>';
          }
        ?>
      </select>
        <?php
          if(isset($csapatok))
          {
            echo "<fieldset>";
            echo '<legend>'.$csapatok->vezeteknev.'('.$csapatok->utonev.') csapatai:</legend>';
            foreach($csapatok->csapatok as $csapat)
            {
              echo $csapat['klubid'].' - '.$csapat['csapatnev']."<br>";
            }
            echo "</fieldset>";
          }
        ?>
    </form>
  </body>                                                          
