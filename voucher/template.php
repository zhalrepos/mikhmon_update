<?php
// Copy Paste ke template editor [Settings -> Template Editor].

if (substr($validity, -1) == "d") {
  $validity = "Aktif:" . substr($validity, 0, -1) . "Hari";
} else if (substr($validity, -1) == "h") {
  $validity = "Aktif:" . substr($validity, 0, -1) . "Jam";
}
if (substr($timelimit, -1) == "d" & strlen($timelimit) > 3) {
  $timelimit = "Durasi:" . ((substr($timelimit, 0, -1) * 7) + substr($timelimit, 2, 1)) . "Hari";
} else if (substr($timelimit, -1) == "d") {
  $timelimit = "Durasi:" . substr($timelimit, 0, -1) . "Hari";
} else if (substr($timelimit, -1) == "h") {
  $timelimit = "Durasi:" . substr($timelimit, 0, -1) . "Jam";
} else if (substr($timelimit, -1) == "w") {
  $timelimit = "Durasi:" . (substr($timelimit, 0, -1) * 7) . "Hari";
}
?>
<style type="text/css">
.rotate {
  vertical-align: center;
  font-weight: bolder;
  font-size: 11px;
  border-right: 1.1px solid black;
  text-align: center;
}
.signa {
  font-size: 9px;
  font-weight:bold;
  border-bottom: 1px black solid;
}
.rotate span {
  -ms-writing-mode: tb-rl;
  -webkit-writing-mode: vertical-rl;
  writing-mode: vertical-rl;
  transform: rotate(180deg);
  white-space: nowrap;
}
.bebe {
  width: 100%;
  font-weight: bold;
  font-size: 9.1px;
  text-align: center;
}
.voc {
  width: 100%;
  font-weight: bold;
  border: 1.5px solid black;
  border-radius: 3px 10px;
  font-size: 11px;
  letter-spacing: 2px;
  text-align: center;
}
.qrcode{
		height:60px;
		width:60px;
}
</style>
<table class="voucher" style="width: 6.359cm;">
  <tbody>
    <tr>
      <td class="rotate" rowspan="4">
        <span><b><?= $hotspotname; ?></b></span>
      </td>
      <td class="signa" colspan="2"><?= date("d-m-Y") ?>
        <span id="num"><?= " [$num]"; ?></span>
      </td>
    </tr>
    <tr>
      <td>
        <table style="text-align: center; width: 213.6px;">
          <tbody>
            <tr>
              <td>
                <table style="width: 100%; margin-top: 1.5px; margin-bottom: 15.2px;">
                  <tr>
                    <td class="bebe">
                      KODE VOUCHER
                    </td>
                  </tr>
                  <tr>
                    <?php if ($usermode == "vc") { ?>
                      <td class="voc"><?= $username; ?></td>
                    <?php
                    } elseif ($usermode == "up") { ?>
                      <td class="voc"><?= "User: " . $username . "<br>Pass: " . $password; ?></td>
                    <?php
                    } ?>
                  </tr>
                </table>
                <tr>
                  <td class="bebe" colspan="3">Login: http://<?= $dnsname; ?></td>
                </tr>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
