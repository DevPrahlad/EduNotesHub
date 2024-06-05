<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Solar System animation - Pure CSS</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:300'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
<style>
/*
  Malik Dellidj - @Dathink

  Solar System orbit animation true time scaled

  Revolution of planets in earth days (from Wikipedia)
  Mercury : ~87,5 days
  Venus : ~224,7 days
  Earth : ~365,2563 days
    + Moon : ~27,3216 days (around earth)
  Mars : ~687 days (~1,8 year)
  Jupiter : ~4 331 days (~12 years)
  Saturn : ~10 747 days (~30 years)
  Uranus : ~30 589 days (~84 years)
  Neptune : ~59 802 days (~165 years)
  Pluto : ~90 580 days (~248 years)
*/
*, *:before, *:after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html, body {
  height: 100%;
  width: 100%;
}

body {
  font: normal 1em/1.45em "Helvetica Neue", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  color: #fff;
  background: radial-gradient(ellipse at bottom, #1C2837 0%, #050608 100%);
  background-attachment: fixed;
}

h1 {
  font-weight: 300;
  font-size: 2.5em;
  text-transform: uppercase;
  font-family: Lato;
  line-height: 1.6em;
  letter-spacing: 0.1em;
}

a, a:visited {
  text-decoration: none;
  color: white;
  opacity: 0.7;
}
a:hover, a:visited:hover {
  opacity: 1;
}
a.icon, a:visited.icon {
  margin-right: 2px;
  padding: 3px;
}

.description {
  padding: 30px;
  position: absolute;
  top: 0;
  left: 0;
  width: 25%;
  z-index: 999;
}
.description p {
  font-size: 0.9em;
}
.description p + p {
  margin-top: 20px;
}
.description p.author {
  font-size: 0.7em;
}
.description p.author .fa-heart {
  color: #860014;
}

hr {
  margin: 26px 0;
  border: 0;
  border-top: 1px solid white;
  background: transparent;
  width: 25%;
  opacity: 0.1;
}

code {
  color: #ae94c0;
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
  font-size: 0.9em;
}

.solar-syst {
  margin: 0 auto;
  width: 100%;
  height: 100%;
  position: relative;
}
.solar-syst:after {
  content: "";
  position: absolute;
  height: 2px;
  width: 2px;
  top: -2px;
  background: white;
  box-shadow: 1370px 1660px 0 0px rgba(255, 255, 255, 0.571) , 1045px 774px 0 0px rgba(255,255,255, 0.291) , 812px 1484px 0 0px rgba(255,255,255, 0.422) , 1679px 1559px 0 0px rgba(255,255,255, 0.652) , 1630px 853px 0 0px rgba(255,255,255, 0.764) , 110px 998px 0 0px rgba(255,255,255, 0.042) , 1624px 862px 0 0px rgba(255,255,255, 0.616) , 994px 1572px 0 0px rgba(255,255,255, 0.903) , 1336px 1121px 0 0px rgba(255,255,255, 0.069) , 435px 1362px 0 0px rgba(255,255,255, 0.095) , 1525px 501px 0 0px rgba(255,255,255, 0.475) , 1593px 696px 0 0px rgba(255,255,255, 0.206) , 36px 1690px 0 0px rgba(255,255,255, 0.713) , 53px 1539px 0 0px rgba(255,255,255, 0.469) , 127px 442px 0 0px rgba(255,255,255, 0.531) , 936px 474px 0 0px rgba(255,255,255, 0.52) , 1238px 867px 0 0px rgba(255,255,255, 0.529) , 880px 540px 0 0px rgba(255,255,255, 0.791) , 1785px 126px 0 0px rgba(255,255,255, 0.795) , 1167px 16px 0 0px rgba(255,255,255, 0.254) , 286px 1334px 0 0px rgba(255,255,255, 0.01) , 859px 579px 0 0px rgba(255,255,255, 0.033) , 165px 1287px 0 0px rgba(255,255,255, 0.407) , 1015px 433px 0 0px rgba(255,255,255, 0.437) , 436px 1729px 0 0px rgba(255,255,255, 0.055) , 426px 639px 0 0px rgba(255,255,255, 0.034) , 43px 416px 0 0px rgba(255,255,255, 0.736) , 780px 500px 0 0px rgba(255,255,255, 0.831) , 690px 204px 0 0px rgba(255,255,255, 0.73) , 1036px 764px 0 0px rgba(255,255,255, 0.607) , 1286px 398px 0 0px rgba(255,255,255, 0.576) , 1059px 1548px 0 0px rgba(255,255,255, 0.307) , 435px 200px 0 0px rgba(255,255,255, 0.451) , 433px 1726px 0 0px rgba(255,255,255, 0.245) , 968px 563px 0 0px rgba(255,255,255, 0.026) , 1762px 1017px 0 0px rgba(255,255,255, 0.599) , 754px 1211px 0 0px rgba(255,255,255, 0.975) , 596px 701px 0 0px rgba(255,255,255, 0.985) , 1375px 1660px 0 0px rgba(255,255,255, 0.998) , 316px 149px 0 0px rgba(255,255,255, 0.526) , 576px 138px 0 0px rgba(255,255,255, 0.301) , 1024px 507px 0 0px rgba(255,255,255, 0.845) , 1145px 368px 0 0px rgba(255,255,255, 0.268) , 321px 46px 0 0px rgba(255,255,255, 0.137) , 700px 1653px 0 0px rgba(255,255,255, 0.279) , 853px 562px 0 0px rgba(255,255,255, 0.104) , 1489px 1602px 0 0px rgba(255,255,255, 0.015) , 1053px 1646px 0 0px rgba(255,255,255, 0.793) , 330px 1270px 0 0px rgba(255,255,255, 0.775) , 1616px 1675px 0 0px rgba(255,255,255, 0.179) , 1223px 85px 0 0px rgba(255,255,255, 0.996) , 1708px 248px 0 0px rgba(255,255,255, 0.337) , 167px 860px 0 0px rgba(255,255,255, 0.092) , 16px 675px 0 0px rgba(255,255,255, 0.331) , 1613px 1491px 0 0px rgba(255,255,255, 0.605) , 1334px 764px 0 0px rgba(255,255,255, 0.676) , 830px 751px 0 0px rgba(255,255,255, 0.333) , 69px 865px 0 0px rgba(255,255,255, 0.23) , 280px 1305px 0 0px rgba(255,255,255, 0.373) , 649px 1271px 0 0px rgba(255,255,255, 0.431) , 1306px 704px 0 0px rgba(255,255,255, 0.851) , 597px 365px 0 0px rgba(255,255,255, 0.102) , 396px 36px 0 0px rgba(255,255,255, 0.466) , 1151px 1311px 0 0px rgba(255,255,255, 0.391) , 1798px 1560px 0 0px rgba(255,255,255, 0.881) , 1192px 998px 0 0px rgba(255,255,255, 0.525) , 647px 494px 0 0px rgba(255,255,255, 0.729) , 292px 1427px 0 0px rgba(255,255,255, 0.065) , 522px 245px 0 0px rgba(255,255,255, 0.475) , 1139px 200px 0 0px rgba(255,255,255, 0.999) , 974px 1410px 0 0px rgba(255,255,255, 0.009) , 310px 1165px 0 0px rgba(255,255,255, 0.791) , 450px 224px 0 0px rgba(255,255,255, 0.078) , 62px 1220px 0 0px rgba(255,255,255, 0.717) , 1767px 1196px 0 0px rgba(255,255,255, 0.381) , 1386px 1602px 0 0px rgba(255,255,255, 0.775) , 298px 840px 0 0px rgba(255,255,255, 0.676) , 413px 1180px 0 0px rgba(255,255,255, 0.877) , 98px 973px 0 0px rgba(255,255,255, 0.18) , 576px 1021px 0 0px rgba(255,255,255, 0.019) , 1639px 884px 0 0px rgba(255,255,255, 0.039) , 276px 1370px 0 0px rgba(255,255,255, 0.312) , 1284px 1133px 0 0px rgba(255,255,255, 0.481) , 745px 534px 0 0px rgba(255,255,255, 0.731) , 341px 1223px 0 0px rgba(255,255,255, 0.553) , 813px 818px 0 0px rgba(255,255,255, 0.102) , 665px 660px 0 0px rgba(255,255,255, 0.028) , 1002px 1627px 0 0px rgba(255,255,255, 0.238) , 888px 1480px 0 0px rgba(255,255,255, 0.488) , 925px 552px 0 0px rgba(255,255,255, 0.694) , 1729px 206px 0 0px rgba(255,255,255, 0.399) , 474px 1530px 0 0px rgba(255,255,255, 0.574) , 528px 1168px 0 0px rgba(255,255,255, 0.377) , 1133px 800px 0 0px rgba(255,255,255, 0.325) , 1031px 1214px 0 0px rgba(255,255,255, 0.968) , 1203px 1782px 0 0px rgba(255,255,255, 0.085) , 1291px 1038px 0 0px rgba(255,255,255, 0.213) , 944px 959px 0 0px rgba(255,255,255, 0.047) , 732px 984px 0 0px rgba(255,255,255, 0.947) , 435px 1358px 0 0px rgba(255,255,255, 0.974) , 1725px 229px 0 0px rgba(255,255,255, 0.305) , 1432px 735px 0 0px rgba(255,255,255, 0.828) , 471px 1366px 0 0px rgba(255,255,255, 0.801) , 8px 418px 0 0px rgba(255,255,255, 0.789) , 904px 1104px 0 0px rgba(255,255,255, 0.395) , 725px 1433px 0 0px rgba(255,255,255, 0.671) , 1608px 1059px 0 0px rgba(255,255,255, 0.608) , 1526px 1321px 0 0px rgba(255,255,255, 0.638) , 745px 137px 0 0px rgba(255,255,255, 0.623) , 1490px 892px 0 0px rgba(255,255,255, 0.996) , 548px 852px 0 0px rgba(255,255,255, 0.89) , 474px 107px 0 0px rgba(255,255,255, 0.505) , 1578px 1255px 0 0px rgba(255,255,255, 0.645) , 240px 216px 0 0px rgba(255,255,255, 0.09) , 1785px 1498px 0 0px rgba(255,255,255, 0.315) , 1716px 311px 0 0px rgba(255,255,255, 0.964) , 911px 774px 0 0px rgba(255,255,255, 0.71) , 1667px 535px 0 0px rgba(255,255,255, 0.863) , 505px 59px 0 0px rgba(255,255,255, 0.696) , 972px 1246px 0 0px rgba(255,255,255, 0.715) , 1096px 1769px 0 0px rgba(255,255,255, 0.356) , 637px 1678px 0 0px rgba(255,255,255, 0.136) , 1335px 1550px 0 0px rgba(255,255,255, 0.428) , 817px 691px 0 0px rgba(255,255,255, 0.766) , 1371px 1153px 0 0px rgba(255,255,255, 0.871) , 1681px 1178px 0 0px rgba(255,255,255, 0.691) , 1334px 82px 0 0px rgba(255,255,255, 0.296) , 859px 1698px 0 0px rgba(255,255,255, 0.971) , 447px 714px 0 0px rgba(255,255,255, 0.134) , 586px 993px 0 0px rgba(255,255,255, 0.085) , 303px 447px 0 0px rgba(255,255,255, 0.583) , 1756px 307px 0 0px rgba(255,255,255, 0.064) , 1780px 466px 0 0px rgba(255,255,255, 0.939) , 1048px 190px 0 0px rgba(255,255,255, 0.812) , 729px 1689px 0 0px rgba(255,255,255, 0.362) , 408px 636px 0 0px rgba(255,255,255, 0.471) , 1304px 1150px 0 0px rgba(255,255,255, 0.563) , 32px 864px 0 0px rgba(255,255,255, 0.657) , 438px 1708px 0 0px rgba(255,255,255, 0.693) , 1188px 893px 0 0px rgba(255,255,255, 0.348) , 786px 1042px 0 0px rgba(255,255,255, 0.025) , 445px 1781px 0 0px rgba(255,255,255, 0.113) , 1508px 1250px 0 0px rgba(255,255,255, 0.654) , 48px 728px 0 0px rgba(255,255,255, 0.774) , 74px 672px 0 0px rgba(255,255,255, 0.989) , 1668px 1585px 0 0px rgba(255,255,255, 0.656) , 4px 136px 0 0px rgba(255,255,255, 0.489) , 1110px 398px 0 0px rgba(255,255,255, 0.49) , 1282px 1464px 0 0px rgba(255,255,255, 0.778) , 557px 188px 0 0px rgba(255,255,255, 0.752) , 490px 1544px 0 0px rgba(255,255,255, 0.715) , 1137px 123px 0 0px rgba(255,255,255, 0.088) , 328px 843px 0 0px rgba(255,255,255, 0.529) , 1090px 1417px 0 0px rgba(255,255,255, 0.526) , 777px 1257px 0 0px rgba(255,255,255, 0.241) , 1617px 1687px 0 0px rgba(255,255,255, 0.783) , 128px 970px 0 0px rgba(255,255,255, 0.328) , 1719px 611px 0 0px rgba(255,255,255, 0.454) , 681px 1459px 0 0px rgba(255,255,255, 0.574) , 116px 1596px 0 0px rgba(255,255,255, 0.005) , 204px 1736px 0 0px rgba(255,255,255, 0.812) , 1158px 906px 0 0px rgba(255,255,255, 0.99) , 1747px 1755px 0 0px rgba(255,255,255, 0.961) , 809px 1548px 0 0px rgba(255,255,255, 0.135) , 595px 1058px 0 0px rgba(255,255,255, 0.708) , 1794px 1038px 0 0px rgba(255,255,255, 0.762) , 8px 1377px 0 0px rgba(255,255,255, 0.784) , 1374px 1781px 0 0px rgba(255,255,255, 0.652) , 204px 1514px 0 0px rgba(255,255,255, 0.886) , 670px 1356px 0 0px rgba(255,255,255, 0.908) , 480px 1577px 0 0px rgba(255,255,255, 0.876) , 299px 827px 0 0px rgba(255,255,255, 0.79) , 463px 744px 0 0px rgba(255,255,255, 0.87) , 257px 476px 0 0px rgba(255,255,255, 0.472) , 481px 1259px 0 0px rgba(255,255,255, 0.886) , 422px 854px 0 0px rgba(255,255,255, 0.26) , 950px 971px 0 0px rgba(255,255,255, 0.527) , 141px 90px 0 0px rgba(255,255,255, 0.952) , 160px 1720px 0 0px rgba(255,255,255, 0.436) , 1755px 1058px 0 0px rgba(255,255,255, 0.865) , 612px 326px 0 0px rgba(255,255,255, 0.564) , 1070px 1468px 0 0px rgba(255,255,255, 0.222) , 1681px 1754px 0 0px rgba(255,255,255, 0.323) , 1472px 1592px 0 0px rgba(255,255,255, 0.223) , 1310px 764px 0 0px rgba(255,255,255, 0.542) , 1194px 625px 0 0px rgba(255,255,255, 0.007) , 1203px 1343px 0 0px rgba(255,255,255, 0.154) , 497px 1686px 0 0px rgba(255,255,255, 0.557) , 1208px 1562px 0 0px rgba(255,255,255, 0.823) , 827px 228px 0 0px rgba(255,255,255, 0.993) , 922px 408px 0 0px rgba(255,255,255, 0.549) , 1149px 776px 0 0px rgba(255,255,255, 0.993) , 160px 900px 0 0px rgba(255,255,255, 0.654) , 1485px 1338px 0 0px rgba(255,255,255, 0.493) , 1794px 371px 0 0px rgba(255,255,255, 0.495) , 1753px 382px 0 0px rgba(255,255,255, 0.424) , 310px 606px 0 0px rgba(255,255,255, 0.178) , 1293px 484px 0 0px rgba(255,255,255, 0.105) , 50px 1615px 0 0px rgba(255,255,255, 0.546) , 670px 1299px 0 0px rgba(255,255,255, 0.902) , 1304px 49px 0 0px rgba(255,255,255, 0.921) , 514px 649px 0 0px rgba(255,255,255, 0.517) , 1162px 1377px 0 0px rgba(255,255,255, 0.106) , 1618px 153px 0 0px rgba(255,255,255, 0.796) , 541px 733px 0 0px rgba(255,255,255, 0.955) , 1608px 1333px 0 0px rgba(255,255,255, 0.417) , 955px 139px 0 0px rgba(255,255,255, 0.289) , 910px 543px 0 0px rgba(255,255,255, 0.47) , 1153px 105px 0 0px rgba(255,255,255, 0.234) , 1209px 928px 0 0px rgba(255,255,255, 0.953) , 923px 1319px 0 0px rgba(255,255,255, 0.586) , 567px 1740px 0 0px rgba(255,255,255, 0.279) , 718px 1322px 0 0px rgba(255,255,255, 0.862) , 1493px 1625px 0 0px rgba(255,255,255, 0.677) , 333px 1257px 0 0px rgba(255,255,255, 0.31) , 240px 1483px 0 0px rgba(255,255,255, 0.644) , 1394px 1324px 0 0px rgba(255,255,255, 0.731) , 1144px 736px 0 0px rgba(255,255,255, 0.688) , 649px 398px 0 0px rgba(255,255,255, 0.193) , 1777px 1419px 0 0px rgba(255,255,255, 0.68) , 298px 231px 0 0px rgba(255,255,255, 0.419) , 284px 301px 0 0px rgba(255,255,255, 0.686) , 1425px 119px 0 0px rgba(255,255,255, 0.228) , 1257px 864px 0 0px rgba(255,255,255, 0.535) , 761px 825px 0 0px rgba(255,255,255, 0.63) , 1205px 1325px 0 0px rgba(255,255,255, 0.482) , 538px 51px 0 0px rgba(255,255,255, 0.928) , 949px 753px 0 0px rgba(255,255,255, 0.564) , 236px 88px 0 0px rgba(255,255,255, 0.687) , 462px 1306px 0 0px rgba(255,255,255, 0.816) , 1112px 1475px 0 0px rgba(255,255,255, 0.786) , 1178px 223px 0 0px rgba(255,255,255, 0.632) , 271px 1523px 0 0px rgba(255,255,255, 0.298) , 973px 73px 0 0px rgba(255,255,255, 0.191) , 43px 384px 0 0px rgba(255,255,255, 0.684) , 1493px 1374px 0 0px rgba(255,255,255, 0.859) , 851px 792px 0 0px rgba(255,255,255, 0.747) , 1763px 1656px 0 0px rgba(255,255,255, 0.409) , 497px 1280px 0 0px rgba(255,255,255, 0.461) , 1482px 173px 0 0px rgba(255,255,255, 0.517) , 950px 1171px 0 0px rgba(255,255,255, 0.356) , 92px 1522px 0 0px rgba(255,255,255, 0.117) , 979px 862px 0 0px rgba(255,255,255, 0.365) , 607px 1121px 0 0px rgba(255,255,255, 0.72) , 1096px 590px 0 0px rgba(255,255,255, 0.129) , 1544px 211px 0 0px rgba(255,255,255, 0.118) , 486px 138px 0 0px rgba(255,255,255, 0.328) , 186px 465px 0 0px rgba(255,255,255, 0.138) , 230px 1019px 0 0px rgba(255,255,255, 0.757) , 838px 313px 0 0px rgba(255,255,255, 0.974) , 107px 512px 0 0px rgba(255,255,255, 0.705) , 1259px 121px 0 0px rgba(255,255,255, 0.789) , 296px 371px 0 0px rgba(255,255,255, 0.113) , 1077px 383px 0 0px rgba(255,255,255, 0.614) , 1059px 119px 0 0px rgba(255,255,255, 0.749) , 860px 829px 0 0px rgba(255,255,255, 0.545) , 1769px 1215px 0 0px rgba(255,255,255, 0.199) , 876px 23px 0 0px rgba(255,255,255, 0.718) , 291px 1702px 0 0px rgba(255,255,255, 0.804) , 310px 633px 0 0px rgba(255,255,255, 0.058) , 287px 992px 0 0px rgba(255,255,255, 0.971) , 1631px 1143px 0 0px rgba(255,255,255, 0.412) , 87px 115px 0 0px rgba(255,255,255, 0.884) , 540px 1063px 0 0px rgba(255,255,255, 0.07) , 63px 335px 0 0px rgba(255,255,255, 0.88) , 1290px 1357px 0 0px rgba(255,255,255, 0.545) , 456px 857px 0 0px rgba(255,255,255, 0.402) , 1668px 648px 0 0px rgba(255,255,255, 0.343) , 967px 250px 0 0px rgba(255,255,255, 0.327) , 462px 907px 0 0px rgba(255,255,255, 0.158) , 1550px 1053px 0 0px rgba(255,255,255, 0.337) , 207px 1485px 0 0px rgba(255,255,255, 0.46) , 990px 674px 0 0px rgba(255,255,255, 0.961) , 96px 1708px 0 0px rgba(255,255,255, 0.003) , 1629px 1259px 0 0px rgba(255,255,255, 0.699) , 1434px 1684px 0 0px rgba(255,255,255, 0.777) , 788px 778px 0 0px rgba(255,255,255, 0.82) , 224px 1692px 0 0px rgba(255,255,255, 0.551) , 652px 1248px 0 0px rgba(255,255,255, 0.807) , 1427px 1786px 0 0px rgba(255,255,255, 0.212) , 1308px 1471px 0 0px rgba(255,255,255, 0.241) , 441px 1237px 0 0px rgba(255,255,255, 0.745) , 948px 279px 0 0px rgba(255,255,255, 0.283) , 1125px 532px 0 0px rgba(255,255,255, 0.727) , 889px 1475px 0 0px rgba(255,255,255, 0.948) , 441px 1586px 0 0px rgba(255,255,255, 0.464) , 1508px 1507px 0 0px rgba(255,255,255, 0.852) , 1447px 604px 0 0px rgba(255,255,255, 0.619) , 496px 1744px 0 0px rgba(255,255,255, 0.374) , 1309px 1578px 0 0px rgba(255,255,255, 0.378) , 1259px 788px 0 0px rgba(255,255,255, 0.081) , 1261px 1403px 0 0px rgba(255,255,255, 0.296) , 46px 1789px 0 0px rgba(255,255,255, 0.8) , 499px 1111px 0 0px rgba(255,255,255, 0.777) , 288px 1550px 0 0px rgba(255,255,255, 0.297) , 737px 452px 0 0px rgba(255,255,255, 0.298) , 225px 1400px 0 0px rgba(255,255,255, 0.392) , 424px 1083px 0 0px rgba(255,255,255, 0.638) , 74px 735px 0 0px rgba(255,255,255, 0.24) , 811px 1179px 0 0px rgba(255,255,255, 0.116) , 537px 1532px 0 0px rgba(255,255,255, 0.63) , 171px 1370px 0 0px rgba(255,255,255, 0.176) , 425px 238px 0 0px rgba(255,255,255, 0.27) , 534px 1419px 0 0px rgba(255,255,255, 0.993) , 356px 1641px 0 0px rgba(255,255,255, 0.844) , 958px 1332px 0 0px rgba(255,255,255, 0.622) , 40px 845px 0 0px rgba(255,255,255, 0.114) , 800px 959px 0 0px rgba(255,255,255, 0.177) , 1272px 1724px 0 0px rgba(255,255,255, 0.796) , 1279px 781px 0 0px rgba(255,255,255, 0.397) , 1536px 736px 0 0px rgba(255,255,255, 0.73) , 523px 1345px 0 0px rgba(255,255,255, 0.641) , 1218px 1610px 0 0px rgba(255,255,255, 0.911) , 111px 1662px 0 0px rgba(255,255,255, 0.73) , 1799px 743px 0 0px rgba(255,255,255, 0.428) , 517px 654px 0 0px rgba(255,255,255, 0.728) , 409px 863px 0 0px rgba(255,255,255, 0.241) , 650px 504px 0 0px rgba(255,255,255, 0.275) , 1678px 1147px 0 0px rgba(255,255,255, 0.522) , 1492px 823px 0 0px rgba(255,255,255, 0.188) , 1595px 701px 0 0px rgba(255,255,255, 0.743) , 985px 1482px 0 0px rgba(255,255,255, 0.506) , 607px 420px 0 0px rgba(255,255,255, 0.35) , 150px 1437px 0 0px rgba(255,255,255, 0.398) , 1299px 659px 0 0px rgba(255,255,255, 0.449) , 1391px 1437px 0 0px rgba(255,255,255, 0.491) , 843px 368px 0 0px rgba(255,255,255, 0.548) , 1306px 80px 0 0px rgba(255,255,255, 0.515) , 1753px 627px 0 0px rgba(255,255,255, 0.06) , 814px 1134px 0 0px rgba(255,255,255, 0.987) , 1309px 1504px 0 0px rgba(255,255,255, 0.844) , 994px 1292px 0 0px rgba(255,255,255, 0.533) , 66px 1164px 0 0px rgba(255,255,255, 0.768) , 1423px 440px 0 0px rgba(255,255,255, 0.163) , 691px 442px 0 0px rgba(255,255,255, 0.294) , 826px 1166px 0 0px rgba(255,255,255, 0.376) , 364px 1073px 0 0px rgba(255,255,255, 0.615) , 1710px 1734px 0 0px rgba(255,255,255, 0.076) , 843px 1800px 0 0px rgba(255,255,255, 0.194) , 913px 1560px 0 0px rgba(255,255,255, 0.616) , 1614px 1547px 0 0px rgba(255,255,255, 0.51) , 69px 1595px 0 0px rgba(255,255,255, 0.568) , 352px 1132px 0 0px rgba(255,255,255, 0.686) , 433px 1651px 0 0px rgba(255,255,255, 0.921) , 1395px 256px 0 0px rgba(255,255,255, 0.409) , 1045px 345px 0 0px rgba(255,255,255, 0.998) , 630px 1283px 0 0px rgba(255,255,255, 0.209) , 1623px 1509px 0 0px rgba(255,255,255, 0.076) , 793px 27px 0 0px rgba(255,255,255, 0.1) , 1243px 1023px 0 0px rgba(255,255,255, 0.918) , 1053px 450px 0 0px rgba(255,255,255, 0.895) , 1273px 482px 0 0px rgba(255,255,255, 0.477) , 1589px 1579px 0 0px rgba(255,255,255, 0.577) , 778px 1600px 0 0px rgba(255,255,255, 0.293) , 1647px 14px 0 0px rgba(255,255,255, 0.871) , 945px 1562px 0 0px rgba(255,255,255, 0.121) , 154px 1362px 0 0px rgba(255,255,255, 0.363) , 1037px 1496px 0 0px rgba(255,255,255, 0.119) , 1201px 118px 0 0px rgba(255,255,255, 0.831) , 1702px 1797px 0 0px rgba(255,255,255, 0.815) , 1558px 38px 0 0px rgba(255,255,255, 0.288) , 901px 848px 0 0px rgba(255,255,255, 0.818) , 1641px 916px 0 0px rgba(255,255,255, 0.425) , 41px 1712px 0 0px rgba(255,255,255, 0.804) , 325px 902px 0 0px rgba(255,255,255, 0.091) , 1301px 1503px 0 0px rgba(255,255,255, 0.998) , 1057px 398px 0 0px rgba(255,255,255, 0.724) , 1124px 703px 0 0px rgba(255,255,255, 0.149) , 1609px 1271px 0 0px rgba(255,255,255, 0.221) , 773px 1224px 0 0px rgba(255,255,255, 0.807) , 704px 745px 0 0px rgba(255,255,255, 0.228) , 72px 606px 0 0px rgba(255,255,255, 0.192) , 995px 425px 0 0px rgba(255,255,255, 0.771) , 1046px 1710px 0 0px rgba(255,255,255, 0.378) , 44px 693px 0 0px rgba(255,255,255, 0.773) , 1133px 1353px 0 0px rgba(255,255,255, 0.366) , 1607px 1337px 0 0px rgba(255,255,255, 0.409) , 1539px 1277px 0 0px rgba(255,255,255, 0.056) , 1056px 599px 0 0px rgba(255,255,255, 0.191) , 652px 1697px 0 0px rgba(255,255,255, 0.175) , 30px 707px 0 0px rgba(255,255,255, 0.574) , 536px 1568px 0 0px rgba(255,255,255, 0.936) , 597px 407px 0 0px rgba(255,255,255, 0.941) , 1477px 729px 0 0px rgba(255,255,255, 0.347) , 97px 1628px 0 0px rgba(255,255,255, 0.478) , 1139px 762px 0 0px rgba(255,255,255, 0.754) , 1261px 52px 0 0px rgba(255,255,255, 0.894) , 1242px 1762px 0 0px rgba(255,255,255, 0.848) , 137px 1203px 0 0px rgba(255,255,255, 0.847) , 993px 609px 0 0px rgba(255,255,255, 0.738) , 321px 632px 0 0px rgba(255,255,255, 0.591) , 736px 917px 0 0px rgba(255,255,255, 0.801) , 1420px 323px 0 0px rgba(255,255,255, 0.323) , 1321px 1259px 0 0px rgba(255,255,255, 0.648) , 1198px 1788px 0 0px rgba(255,255,255, 0.795) , 1793px 576px 0 0px rgba(255,255,255, 0.452) , 641px 214px 0 0px rgba(255,255,255, 0.511) , 352px 561px 0 0px rgba(255,255,255, 0.487) , 26px 479px 0 0px rgba(255,255,255, 0.762) , 185px 870px 0 0px rgba(255,255,255, 0.03) , 1363px 1497px 0 0px rgba(255,255,255, 0.377) , 612px 1535px 0 0px rgba(255,255,255, 0.539) , 1454px 112px 0 0px rgba(255,255,255, 0.698) , 1213px 96px 0 0px rgba(255,255,255, 0.546) , 1312px 1043px 0 0px rgba(255,255,255, 0.833) , 486px 1049px 0 0px rgba(255,255,255, 0.247) , 1767px 236px 0 0px rgba(255,255,255, 0.761) , 94px 1063px 0 0px rgba(255,255,255, 0.713) , 90px 347px 0 0px rgba(255,255,255, 0.828) , 1661px 418px 0 0px rgba(255,255,255, 0.794) , 843px 105px 0 0px rgba(255,255,255, 0.631) , 1174px 634px 0 0px rgba(255,255,255, 0.239) , 1118px 1095px 0 0px rgba(255,255,255, 0.861) , 262px 1665px 0 0px rgba(255,255,255, 0.461) , 798px 658px 0 0px rgba(255,255,255, 0.775) , 1121px 1659px 0 0px rgba(255,255,255, 0.681) , 1539px 1389px 0 0px rgba(255,255,255, 0.664) , 86px 1314px 0 0px rgba(255,255,255, 0.214) , 400px 450px 0 0px rgba(255,255,255, 0.308) , 513px 1012px 0 0px rgba(255,255,255, 0.261) , 289px 1195px 0 0px rgba(255,255,255, 0.034) , 1464px 417px 0 0px rgba(255,255,255, 0.428) , 281px 1478px 0 0px rgba(255,255,255, 0.748) , 16px 995px 0 0px rgba(255,255,255, 0.231) , 633px 487px 0 0px rgba(255,255,255, 0.948) , 1203px 824px 0 0px rgba(255,255,255, 0.732) , 496px 1183px 0 0px rgba(255,255,255, 0.865) , 898px 1090px 0 0px rgba(255,255,255, 0.52) , 766px 1690px 0 0px rgba(255,255,255, 0.829) , 1702px 1613px 0 0px rgba(255,255,255, 0.619) , 1480px 18px 0 0px rgba(255,255,255, 0.122) , 1474px 1246px 0 0px rgba(255,255,255, 0.685) , 317px 1479px 0 0px rgba(255,255,255, 0.21) , 391px 1340px 0 0px rgba(255,255,255, 0.918) , 959px 776px 0 0px rgba(255,255,255, 0.381) , 961px 341px 0 0px rgba(255,255,255, 0.707) , 364px 392px 0 0px rgba(255,255,255, 0.904) , 813px 1235px 0 0px rgba(255,255,255, 0.169) , 1303px 505px 0 0px rgba(255,255,255, 0.588) , 1488px 1341px 0 0px rgba(255,255,255, 0.191) , 993px 827px 0 0px rgba(255,255,255, 0.412) , 257px 1593px 0 0px rgba(255,255,255, 0.941) , 1018px 714px 0 0px rgba(255,255,255, 0.9) , 18px 1295px 0 0px rgba(255,255,255, 0.55) , 1246px 1602px 0 0px rgba(255,255,255, 0.099) , 1232px 687px 0 0px rgba(255,255,255, 0.509) , 248px 1482px 0 0px rgba(255,255,255, 0.866) , 386px 1299px 0 0px rgba(255,255,255, 0.161) , 26px 87px 0 0px rgba(255,255,255, 0.816) , 1123px 1485px 0 0px rgba(255,255,255, 0.71) , 75px 355px 0 0px rgba(255,255,255, 0.464) , 940px 947px 0 0px rgba(255,255,255, 0.151) , 539px 603px 0 0px rgba(255,255,255, 0.616) , 886px 400px 0 0px rgba(255,255,255, 0.883) , 1377px 243px 0 0px rgba(255,255,255, 0.544) , 1379px 263px 0 0px rgba(255,255,255, 0.705) , 347px 1258px 0 0px rgba(255,255,255, 0.851) , 605px 1314px 0 0px rgba(255,255,255, 0.114) , 13px 1352px 0 0px rgba(255,255,255, 0.422) , 1237px 547px 0 0px rgba(255,255,255, 0.108) , 1339px 907px 0 0px rgba(255,255,255, 0.047) , 1214px 322px 0 0px rgba(255,255,255, 0.38) , 1188px 1759px 0 0px rgba(255,255,255, 0.942) , 1173px 290px 0 0px rgba(255,255,255, 0.501) , 1731px 584px 0 0px rgba(255,255,255, 0.231) , 906px 896px 0 0px rgba(255,255,255, 0.322) , 283px 26px 0 0px rgba(255,255,255, 0.225) , 740px 1182px 0 0px rgba(255,255,255, 0.446) , 483px 1227px 0 0px rgba(255,255,255, 0.45) , 812px 1537px 0 0px rgba(255,255,255, 0.006) , 648px 1796px 0 0px rgba(255,255,255, 0.499) , 242px 1447px 0 0px rgba(255,255,255, 0.795) , 125px 44px 0 0px rgba(255,255,255, 0.711) , 20px 738px 0 0px rgba(255,255,255, 0.54) , 134px 1459px 0 0px rgba(255,255,255, 0.698) , 1581px 212px 0 0px rgba(255,255,255, 0.92) , 1175px 1721px 0 0px rgba(255,255,255, 0.376) , 1556px 75px 0 0px rgba(255,255,255, 0.917) , 865px 197px 0 0px rgba(255,255,255, 0.288) , 507px 1279px 0 0px rgba(255,255,255, 0.428) , 387px 364px 0 0px rgba(255,255,255, 0.136) , 222px 417px 0 0px rgba(255,255,255, 0.965) , 26px 968px 0 0px rgba(255,255,255, 0.685) , 1731px 894px 0 0px rgba(255,255,255, 0.442) , 1237px 1092px 0 0px rgba(255,255,255, 0.67) , 633px 39px 0 0px rgba(255,255,255, 0.177) , 1465px 457px 0 0px rgba(255,255,255, 0.83) , 1536px 1085px 0 0px rgba(255,255,255, 0.093) , 412px 1716px 0 0px rgba(255,255,255, 0.928) , 1300px 181px 0 0px rgba(255,255,255, 0.436) , 973px 1745px 0 0px rgba(255,255,255, 0.761) , 928px 752px 0 0px rgba(255,255,255, 0.242) , 1632px 135px 0 0px rgba(255,255,255, 0.696) , 385px 279px 0 0px rgba(255,255,255, 0.353) , 132px 353px 0 0px rgba(255,255,255, 0.961) , 455px 1342px 0 0px rgba(255,255,255, 0.092) , 1793px 545px 0 0px rgba(255,255,255, 0.33) , 163px 702px 0 0px rgba(255,255,255, 0.414) , 355px 592px 0 0px rgba(255,255,255, 0.334) , 1610px 932px 0 0px rgba(255,255,255, 0.47);
  border-radius: 100px;
}
.solar-syst div {
  border-radius: 1000px;
  top: 50%;
  left: 50%;
  position: absolute;
  z-index: 999;
}
.solar-syst div:not(.sun) {
  border: 1px solid rgba(102, 166, 229, 0.12);
}
.solar-syst div:not(.sun):before {
  left: 50%;
  border-radius: 100px;
  content: "";
  position: absolute;
}
.solar-syst div:not(.asteroids-belt):before {
  box-shadow: inset 0 6px 0 -2px rgba(0, 0, 0, 0.25);
}

.sun {
  background: radial-gradient(ellipse at center, #ffd000 1%, #f9b700 39%, #f9b700 39%, #e06317 100%);
  height: 40px;
  width: 40px;
  margin-top: -20px;
  margin-left: -20px;
  background-clip: padding-box;
  border: 0 !important;
  background-position: -28px -103px;
  background-size: 175%;
  box-shadow: 0 0 10px 2px rgba(255, 107, 0, 0.4), 0 0 22px 11px rgba(255, 203, 0, 0.13);
}

.mercury {
  height: 70px;
  width: 70px;
  margin-top: -35px;
  margin-left: -35px;
  -webkit-animation: orb 7.1867343561s linear infinite;
          animation: orb 7.1867343561s linear infinite;
}
.mercury:before {
  height: 4px;
  width: 4px;
  background: #9f5e26;
  margin-top: -2px;
  margin-left: -2px;
}

.venus {
  height: 100px;
  width: 100px;
  margin-top: -50px;
  margin-left: -50px;
  -webkit-animation: orb 18.4555338265s linear infinite;
          animation: orb 18.4555338265s linear infinite;
}
.venus:before {
  height: 8px;
  width: 8px;
  background: #BEB768;
  margin-top: -4px;
  margin-left: -4px;
}

.earth {
  height: 145px;
  width: 145px;
  margin-top: -72.5px;
  margin-left: -72.5px;
  -webkit-animation: orb 30s linear infinite;
          animation: orb 30s linear infinite;
}
.earth:before {
  height: 6px;
  width: 6px;
  background: #11abe9;
  margin-top: -3px;
  margin-left: -3px;
}
.earth:after {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 50%;
  top: 0px;
  margin-left: -9px;
  margin-top: -9px;
  border-radius: 100px;
  box-shadow: 0 -10px 0 -8px grey;
  -webkit-animation: orb 2.2440352158s linear infinite;
          animation: orb 2.2440352158s linear infinite;
}

.mars {
  height: 190px;
  width: 190px;
  margin-top: -95px;
  margin-left: -95px;
  -webkit-animation: orb 56.4261314589s linear infinite;
          animation: orb 56.4261314589s linear infinite;
}
.mars:before {
  height: 6px;
  width: 6px;
  background: #cf3921;
  margin-top: -3px;
  margin-left: -3px;
}

.jupiter {
  height: 340px;
  width: 340px;
  margin-top: -170px;
  margin-left: -170px;
  -webkit-animation: orb 355.7228171013s linear infinite;
          animation: orb 355.7228171013s linear infinite;
}
.jupiter:before {
  height: 18px;
  width: 18px;
  background: #c76e2a;
  margin-top: -9px;
  margin-left: -9px;
}

.saturn {
  height: 440px;
  width: 440px;
  margin-top: -220px;
  margin-left: -220px;
  -webkit-animation: orb 882.6952471456s linear infinite;
          animation: orb 882.6952471456s linear infinite;
}
.saturn:before {
  height: 12px;
  width: 12px;
  background: #e7c194;
  margin-top: -6px;
  margin-left: -6px;
}
.saturn:after {
  position: absolute;
  content: "";
  height: 2.34%;
  width: 4.676%;
  left: 50%;
  top: 0px;
  transform: rotateZ(-52deg);
  margin-left: -2.3%;
  margin-top: -1.2%;
  border-radius: 50% 50% 50% 50%;
  box-shadow: 0 1px 0 1px #987641, 3px 1px 0 #987641, -3px 1px 0 #987641;
  -webkit-animation: orb 882.6952471456s linear infinite;
          animation: orb 882.6952471456s linear infinite;
  animation-direction: reverse;
  transform-origin: 52% 60%;
}

.uranus {
  height: 520px;
  width: 520px;
  margin-top: -260px;
  margin-left: -260px;
  -webkit-animation: orb 2512.4001967933s linear infinite;
          animation: orb 2512.4001967933s linear infinite;
}
.uranus:before {
  height: 10px;
  width: 10px;
  background: #b5e3e3;
  margin-top: -5px;
  margin-left: -5px;
}

.neptune {
  height: 630px;
  width: 630px;
  margin-top: -315px;
  margin-left: -315px;
  -webkit-animation: orb 4911.7838624549s linear infinite;
          animation: orb 4911.7838624549s linear infinite;
}
.neptune:before {
  height: 10px;
  width: 10px;
  background: #175e9e;
  margin-top: -5px;
  margin-left: -5px;
}

.asteroids-belt {
  opacity: 0.7;
  border-color: transparent !important;
  height: 300px;
  width: 300px;
  margin-top: -150px;
  margin-left: -150px;
  -webkit-animation: orb 179.9558282773s linear infinite;
          animation: orb 179.9558282773s linear infinite;
  overflow: hidden;
}
.asteroids-belt:before {
  top: 50%;
  height: 210px;
  width: 210px;
  margin-left: -105px;
  margin-top: -105px;
  background: transparent;
  border-radius: 140px !important;
  box-shadow: -64px 26px 0 -104px rgba(255, 255, 255, 0.679) , 86px -106px 0 -104px rgba(255,255,255, 0.006) , -108px -49px 0 -104px rgba(255,255,255, 0.953) , 19px 33px 0 -104px rgba(255,255,255, 0.559) , -26px -20px 0 -104px rgba(255,255,255, 0.183) , 93px -141px 0 -104px rgba(255,255,255, 0.288) , 1px 31px 0 -104px rgba(255,255,255, 0.359) , 109px -113px 0 -104px rgba(255,255,255, 0.116) , 98px -93px 0 -104px rgba(255,255,255, 0.64) , 47px 63px 0 -104px rgba(255,255,255, 0.682) , -51px -27px 0 -104px rgba(255,255,255, 0.288) , -57px 1px 0 -104px rgba(255,255,255, 0.155) , -73px 121px 0 -104px rgba(255,255,255, 0.328) , -34px 57px 0 -104px rgba(255,255,255, 0.124) , -37px -117px 0 -104px rgba(255,255,255, 0.74) , -90px -8px 0 -104px rgba(255,255,255, 0.74) , -83px -16px 0 -104px rgba(255,255,255, 0.413) , 84px -63px 0 -104px rgba(255,255,255, 0.896) , 64px -53px 0 -104px rgba(255,255,255, 0.356) , -14px -79px 0 -104px rgba(255,255,255, 0.141) , 60px 53px 0 -104px rgba(255,255,255, 0.265) , -50px -94px 0 -104px rgba(255,255,255, 0.095) , 126px -98px 0 -104px rgba(255,255,255, 0.811) , 64px 108px 0 -104px rgba(255,255,255, 0.298) , -45px -138px 0 -104px rgba(255,255,255, 0.906) , -94px -50px 0 -104px rgba(255,255,255, 0.831) , -29px 104px 0 -104px rgba(255,255,255, 0.07) , -6px -139px 0 -104px rgba(255,255,255, 0.101) , -99px -121px 0 -104px rgba(255,255,255, 0.776) , -19px 141px 0 -104px rgba(255,255,255, 0.559) , -139px 127px 0 -104px rgba(255,255,255, 0.867) , 10px -89px 0 -104px rgba(255,255,255, 0.324) , -132px 81px 0 -104px rgba(255,255,255, 0.811) , 115px -71px 0 -104px rgba(255,255,255, 0.771) , 91px -78px 0 -104px rgba(255,255,255, 0.754) , 117px -63px 0 -104px rgba(255,255,255, 0.485) , 43px 25px 0 -104px rgba(255,255,255, 0.487) , 143px 71px 0 -104px rgba(255,255,255, 0.883) , 30px 50px 0 -104px rgba(255,255,255, 0.542) , -62px -86px 0 -104px rgba(255,255,255, 0.734) , 65px 61px 0 -104px rgba(255,255,255, 0.843) , -15px -90px 0 -104px rgba(255,255,255, 0.606) , -97px 129px 0 -104px rgba(255,255,255, 0.091) , -45px 23px 0 -104px rgba(255,255,255, 0.122) , -25px -133px 0 -104px rgba(255,255,255, 0.232) , -138px -46px 0 -104px rgba(255,255,255, 0.513) , 67px -133px 0 -104px rgba(255,255,255, 0.542) , 120px -52px 0 -104px rgba(255,255,255, 0.312) , 99px -119px 0 -104px rgba(255,255,255, 0.769) , 37px 11px 0 -104px rgba(255,255,255, 0.987) , 105px 102px 0 -104px rgba(255,255,255, 0.777) , -131px -83px 0 -104px rgba(255,255,255, 0.229) , 49px 82px 0 -104px rgba(255,255,255, 0.643) , 4px 109px 0 -104px rgba(255,255,255, 0.424) , -46px -114px 0 -104px rgba(255,255,255, 0.452) , -134px 127px 0 -104px rgba(255,255,255, 0.556) , 78px 105px 0 -104px rgba(255,255,255, 0.047) , -42px 36px 0 -104px rgba(255,255,255, 0.01) , -13px -62px 0 -104px rgba(255,255,255, 0.224) , -128px 134px 0 -104px rgba(255,255,255, 0.078) , -119px -6px 0 -104px rgba(255,255,255, 0.972) , 54px 89px 0 -104px rgba(255,255,255, 0.944) , 10px 23px 0 -104px rgba(255,255,255, 0.655) , -24px 58px 0 -104px rgba(255,255,255, 0.146) , 114px 136px 0 -104px rgba(255,255,255, 0.967) , 67px 61px 0 -104px rgba(255,255,255, 0.32) , 98px 140px 0 -104px rgba(255,255,255, 0.591) , 109px 34px 0 -104px rgba(255,255,255, 0.04) , 66px 115px 0 -104px rgba(255,255,255, 0.626) , -1px 91px 0 -104px rgba(255,255,255, 0.614) , 127px 62px 0 -104px rgba(255,255,255, 0.462) , -110px -60px 0 -104px rgba(255,255,255, 0.149) , 137px -12px 0 -104px rgba(255,255,255, 0.494) , 126px -6px 0 -104px rgba(255,255,255, 0.989) , 65px 86px 0 -104px rgba(255,255,255, 0.655) , 23px 33px 0 -104px rgba(255,255,255, 0.915) , 79px 115px 0 -104px rgba(255,255,255, 0.006) , -90px -32px 0 -104px rgba(255,255,255, 0.43) , 117px 135px 0 -104px rgba(255,255,255, 0.176) , 83px -40px 0 -104px rgba(255,255,255, 0.739) , 91px 20px 0 -104px rgba(255,255,255, 0.748) , -70px 125px 0 -104px rgba(255,255,255, 0.5) , -90px 0px 0 -104px rgba(255,255,255, 0.776) , -93px -32px 0 -104px rgba(255,255,255, 0.16) , -120px -81px 0 -104px rgba(255,255,255, 0.95) , 19px -104px 0 -104px rgba(255,255,255, 0.137) , 7px 116px 0 -104px rgba(255,255,255, 0.381) , -144px -7px 0 -104px rgba(255,255,255, 0.801) , -123px 105px 0 -104px rgba(255,255,255, 0.136) , -91px 125px 0 -104px rgba(255,255,255, 0.526) , 36px 72px 0 -104px rgba(255,255,255, 0.309) , 61px -105px 0 -104px rgba(255,255,255, 0.111) , 137px -81px 0 -104px rgba(255,255,255, 0.529) , 36px -110px 0 -104px rgba(255,255,255, 0.418) , 124px -139px 0 -104px rgba(255,255,255, 0.996) , -73px 122px 0 -104px rgba(255,255,255, 0.644) , 77px -98px 0 -104px rgba(255,255,255, 0.114) , 94px 102px 0 -104px rgba(255,255,255, 0.122) , -99px 123px 0 -104px rgba(255,255,255, 0.738) , -123px 130px 0 -104px rgba(255,255,255, 0.055) , 105px -79px 0 -104px rgba(255,255,255, 0.952) , -131px 110px 0 -104px rgba(255,255,255, 0.465) , 24px 135px 0 -104px rgba(255,255,255, 0.684) , -51px -1px 0 -104px rgba(255,255,255, 0.216) , -7px -62px 0 -104px rgba(255,255,255, 0.682) , 38px 1px 0 -104px rgba(255,255,255, 0.756) , -1px -14px 0 -104px rgba(255,255,255, 0.962) , -92px -112px 0 -104px rgba(255,255,255, 0.651) , -120px -131px 0 -104px rgba(255,255,255, 0.923) , -125px 78px 0 -104px rgba(255,255,255, 0.141) , 37px -116px 0 -104px rgba(255,255,255, 0.959) , -28px 7px 0 -104px rgba(255,255,255, 0.76) , -99px -36px 0 -104px rgba(255,255,255, 0.335) , -31px -13px 0 -104px rgba(255,255,255, 0.379) , 63px 102px 0 -104px rgba(255,255,255, 0.839) , -97px -20px 0 -104px rgba(255,255,255, 0.561) , -121px -131px 0 -104px rgba(255,255,255, 0.293) , 97px 128px 0 -104px rgba(255,255,255, 0.237) , -33px 7px 0 -104px rgba(255,255,255, 0.123) , 120px 109px 0 -104px rgba(255,255,255, 0.649) , -20px -135px 0 -104px rgba(255,255,255, 0.1) , 123px 65px 0 -104px rgba(255,255,255, 0.508) , -106px 50px 0 -104px rgba(255,255,255, 0.429) , -50px 62px 0 -104px rgba(255,255,255, 0.339) , 137px -103px 0 -104px rgba(255,255,255, 0.975) , -58px -12px 0 -104px rgba(255,255,255, 0.212) , 80px 23px 0 -104px rgba(255,255,255, 0.506) , -80px 136px 0 -104px rgba(255,255,255, 0.341) , -67px 80px 0 -104px rgba(255,255,255, 0.438) , 127px -32px 0 -104px rgba(255,255,255, 0.286) , 85px -83px 0 -104px rgba(255,255,255, 0.367) , -40px -3px 0 -104px rgba(255,255,255, 0.232) , -47px -21px 0 -104px rgba(255,255,255, 0.09) , 14px 50px 0 -104px rgba(255,255,255, 0.296) , 107px 0px 0 -104px rgba(255,255,255, 0.068) , 36px -95px 0 -104px rgba(255,255,255, 0.472) , 87px -138px 0 -104px rgba(255,255,255, 0.736) , -95px 59px 0 -104px rgba(255,255,255, 0.489) , -137px 67px 0 -104px rgba(255,255,255, 0.598) , -132px 53px 0 -104px rgba(255,255,255, 0.129) , -37px -35px 0 -104px rgba(255,255,255, 0.592) , 38px 137px 0 -104px rgba(255,255,255, 0.95) , 96px 68px 0 -104px rgba(255,255,255, 0.379) , 118px 2px 0 -104px rgba(255,255,255, 0.322) , -100px -8px 0 -104px rgba(255,255,255, 0.826) , -44px -90px 0 -104px rgba(255,255,255, 0.077) , 10px -67px 0 -104px rgba(255,255,255, 0.761) , 22px -1px 0 -104px rgba(255,255,255, 0.164) , 137px 120px 0 -104px rgba(255,255,255, 0.129) , 56px -38px 0 -104px rgba(255,255,255, 0.61) , -57px -94px 0 -104px rgba(255,255,255, 0.59) , 49px -22px 0 -104px rgba(255,255,255, 0.712) , 68px 27px 0 -104px rgba(255,255,255, 0.428) , 139px 143px 0 -104px rgba(255,255,255, 0.944) , 47px -94px 0 -104px rgba(255,255,255, 0.653) , -86px 10px 0 -104px rgba(255,255,255, 0.613) , -69px 77px 0 -104px rgba(255,255,255, 0.694) , 13px -7px 0 -104px rgba(255,255,255, 0.51) , -133px 67px 0 -104px rgba(255,255,255, 0.004) , -122px 79px 0 -104px rgba(255,255,255, 0.16) , -135px 86px 0 -104px rgba(255,255,255, 0.559) , -118px -51px 0 -104px rgba(255,255,255, 0.036) , 50px -139px 0 -104px rgba(255,255,255, 0.596) , -64px 131px 0 -104px rgba(255,255,255, 0.239) , -7px -2px 0 -104px rgba(255,255,255, 0.428) , 44px -121px 0 -104px rgba(255,255,255, 0.644) , 1px -26px 0 -104px rgba(255,255,255, 0.399) , -36px -96px 0 -104px rgba(255,255,255, 0.102) , 85px -97px 0 -104px rgba(255,255,255, 0.234) , 142px 46px 0 -104px rgba(255,255,255, 0.707) , 143px 29px 0 -104px rgba(255,255,255, 0.719) , 61px 95px 0 -104px rgba(255,255,255, 0.607) , -113px 140px 0 -104px rgba(255,255,255, 0.255) , -79px -73px 0 -104px rgba(255,255,255, 0.016) , -59px 24px 0 -104px rgba(255,255,255, 0.27) , 60px 67px 0 -104px rgba(255,255,255, 0.795) , 103px -12px 0 -104px rgba(255,255,255, 0.682) , -75px -41px 0 -104px rgba(255,255,255, 0.138) , 46px -135px 0 -104px rgba(255,255,255, 0.693) , -134px 132px 0 -104px rgba(255,255,255, 0.773) , -34px -18px 0 -104px rgba(255,255,255, 0.889) , 100px -13px 0 -104px rgba(255,255,255, 0.858) , -135px -131px 0 -104px rgba(255,255,255, 0.784) , -57px -117px 0 -104px rgba(255,255,255, 0.605) , 52px -61px 0 -104px rgba(255,255,255, 0.541) , -99px 120px 0 -104px rgba(255,255,255, 0.263) , -92px 108px 0 -104px rgba(255,255,255, 0.881) , -128px 132px 0 -104px rgba(255,255,255, 0.125) , -21px -129px 0 -104px rgba(255,255,255, 0.099) , 137px 65px 0 -104px rgba(255,255,255, 0.969) , -11px -72px 0 -104px rgba(255,255,255, 0.402) , 16px -118px 0 -104px rgba(255,255,255, 0.883) , 39px -123px 0 -104px rgba(255,255,255, 0.24) , -33px 93px 0 -104px rgba(255,255,255, 0.836) , 26px -127px 0 -104px rgba(255,255,255, 0.123) , 14px -114px 0 -104px rgba(255,255,255, 0.848) , -45px -15px 0 -104px rgba(255,255,255, 0.211) , 64px 107px 0 -104px rgba(255,255,255, 0.521) , -76px -108px 0 -104px rgba(255,255,255, 0.698) , 79px -23px 0 -104px rgba(255,255,255, 0.495) , 18px -41px 0 -104px rgba(255,255,255, 0.105) , -136px -96px 0 -104px rgba(255,255,255, 0.318) , -114px -137px 0 -104px rgba(255,255,255, 0.73) , -99px -9px 0 -104px rgba(255,255,255, 0.354) , 49px -9px 0 -104px rgba(255,255,255, 0.325) , -99px -128px 0 -104px rgba(255,255,255, 0.196) , 136px 17px 0 -104px rgba(255,255,255, 0.578) , -47px -113px 0 -104px rgba(255,255,255, 0.274) , 126px -73px 0 -104px rgba(255,255,255, 0.463) , 82px 10px 0 -104px rgba(255,255,255, 0.918) , 124px -106px 0 -104px rgba(255,255,255, 0.481) , 0px 51px 0 -104px rgba(255,255,255, 0.488) , 114px -55px 0 -104px rgba(255,255,255, 0.688) , -19px -56px 0 -104px rgba(255,255,255, 0.51) , 142px -100px 0 -104px rgba(255,255,255, 0.513) , 3px 129px 0 -104px rgba(255,255,255, 0.649) , 129px -11px 0 -104px rgba(255,255,255, 0.401) , -114px -81px 0 -104px rgba(255,255,255, 0.635) , -40px -5px 0 -104px rgba(255,255,255, 0.868) , -11px 79px 0 -104px rgba(255,255,255, 0.097) , 120px -87px 0 -104px rgba(255,255,255, 0.831) , 90px 117px 0 -104px rgba(255,255,255, 0.663) , 133px 38px 0 -104px rgba(255,255,255, 0.898) , -59px 4px 0 -104px rgba(255,255,255, 0.502) , 32px -139px 0 -104px rgba(255,255,255, 0.687) , 113px -19px 0 -104px rgba(255,255,255, 0.4) , 35px -61px 0 -104px rgba(255,255,255, 0.744) , -40px 57px 0 -104px rgba(255,255,255, 0.952) , 59px 100px 0 -104px rgba(255,255,255, 0.712) , -85px -100px 0 -104px rgba(255,255,255, 0.099) , 114px 49px 0 -104px rgba(255,255,255, 0.066) , -8px 57px 0 -104px rgba(255,255,255, 0.657) , 46px -131px 0 -104px rgba(255,255,255, 0.269) , -52px -29px 0 -104px rgba(255,255,255, 0.598) , -140px 3px 0 -104px rgba(255,255,255, 0.549) , 1px -63px 0 -104px rgba(255,255,255, 0.903) , 35px -39px 0 -104px rgba(255,255,255, 0.217) , 70px 8px 0 -104px rgba(255,255,255, 0.35) , 128px 99px 0 -104px rgba(255,255,255, 0.313) , 57px -19px 0 -104px rgba(255,255,255, 0.292) , 90px -102px 0 -104px rgba(255,255,255, 0.055) , 8px 24px 0 -104px rgba(255,255,255, 0.191) , -14px 124px 0 -104px rgba(255,255,255, 0.583) , -60px -74px 0 -104px rgba(255,255,255, 0.712) , -100px -49px 0 -104px rgba(255,255,255, 0.778) , 61px -88px 0 -104px rgba(255,255,255, 0.302) , -50px 15px 0 -104px rgba(255,255,255, 0.421) , 63px -84px 0 -104px rgba(255,255,255, 0.461) , -132px 125px 0 -104px rgba(255,255,255, 0.864) , -71px -10px 0 -104px rgba(255,255,255, 0.122) , 20px -77px 0 -104px rgba(255,255,255, 0.315) , -108px -21px 0 -104px rgba(255,255,255, 0.005) , -32px 81px 0 -104px rgba(255,255,255, 0.995) , 57px 94px 0 -104px rgba(255,255,255, 0.349) , -9px 4px 0 -104px rgba(255,255,255, 0.335) , 34px -101px 0 -104px rgba(255,255,255, 0.649) , 53px -61px 0 -104px rgba(255,255,255, 0.572) , 16px 111px 0 -104px rgba(255,255,255, 0.391) , 96px 83px 0 -104px rgba(255,255,255, 0.496) , 89px -97px 0 -104px rgba(255,255,255, 0.207) , 110px -140px 0 -104px rgba(255,255,255, 0.22) , -41px 122px 0 -104px rgba(255,255,255, 0.33) , 68px 141px 0 -104px rgba(255,255,255, 0.582) , 9px -46px 0 -104px rgba(255,255,255, 0.995) , -31px -23px 0 -104px rgba(255,255,255, 0.827) , -90px 31px 0 -104px rgba(255,255,255, 0.536) , 83px -126px 0 -104px rgba(255,255,255, 0.075) , 97px 81px 0 -104px rgba(255,255,255, 0.839) , -89px 84px 0 -104px rgba(255,255,255, 0.883) , 71px -37px 0 -104px rgba(255,255,255, 0.949) , -33px -106px 0 -104px rgba(255,255,255, 0.504) , 52px 97px 0 -104px rgba(255,255,255, 0.449) , 35px 19px 0 -104px rgba(255,255,255, 0.903) , -80px 50px 0 -104px rgba(255,255,255, 0.946) , 34px 137px 0 -104px rgba(255,255,255, 0.356) , 20px 83px 0 -104px rgba(255,255,255, 0.329) , -28px -81px 0 -104px rgba(255,255,255, 0.832) , -118px 139px 0 -104px rgba(255,255,255, 0.953) , 88px -68px 0 -104px rgba(255,255,255, 0.84) , -36px 51px 0 -104px rgba(255,255,255, 0.981) , -143px -123px 0 -104px rgba(255,255,255, 0.336) , 64px 34px 0 -104px rgba(255,255,255, 0.842) , -27px -76px 0 -104px rgba(255,255,255, 0.653) , 85px -52px 0 -104px rgba(255,255,255, 0.498) , 7px -6px 0 -104px rgba(255,255,255, 0.189) , -7px 73px 0 -104px rgba(255,255,255, 0.427) , 114px -23px 0 -104px rgba(255,255,255, 0.571) , 31px 57px 0 -104px rgba(255,255,255, 0.723) , 131px -95px 0 -104px rgba(255,255,255, 0.802) , 78px 17px 0 -104px rgba(255,255,255, 0.943) , 42px -88px 0 -104px rgba(255,255,255, 0.594) , -105px 15px 0 -104px rgba(255,255,255, 0.162) , -107px 54px 0 -104px rgba(255,255,255, 0.986) , 86px 49px 0 -104px rgba(255,255,255, 0.887) , -2px -139px 0 -104px rgba(255,255,255, 0.649) , -44px -69px 0 -104px rgba(255,255,255, 0.519) , -82px 98px 0 -104px rgba(255,255,255, 0.865) , -36px -58px 0 -104px rgba(255,255,255, 0.679) , -109px 99px 0 -104px rgba(255,255,255, 0.743) , 38px 84px 0 -104px rgba(255,255,255, 0.15) , 111px 9px 0 -104px rgba(255,255,255, 0.657) , -113px -105px 0 -104px rgba(255,255,255, 0.917) , 102px -10px 0 -104px rgba(255,255,255, 0.262) , -89px 33px 0 -104px rgba(255,255,255, 0.666) , 26px 95px 0 -104px rgba(255,255,255, 0.547) , -96px -67px 0 -104px rgba(255,255,255, 0.499) , -22px -70px 0 -104px rgba(255,255,255, 0.299) , -39px -32px 0 -104px rgba(255,255,255, 0.546) , 107px -52px 0 -104px rgba(255,255,255, 0.678) , 9px 123px 0 -104px rgba(255,255,255, 0.842) , 30px -10px 0 -104px rgba(255,255,255, 0.842) , 70px 61px 0 -104px rgba(255,255,255, 0.146) , 143px 81px 0 -104px rgba(255,255,255, 0.215) , -121px -22px 0 -104px rgba(255,255,255, 0.376) , -53px -95px 0 -104px rgba(255,255,255, 0.945) , 65px 121px 0 -104px rgba(255,255,255, 0.482) , -56px 10px 0 -104px rgba(255,255,255, 0.477) , 1px 140px 0 -104px rgba(255,255,255, 0.189) , 118px 88px 0 -104px rgba(255,255,255, 0.962) , 52px -94px 0 -104px rgba(255,255,255, 0.854) , -126px 68px 0 -104px rgba(255,255,255, 0.162) , 48px -68px 0 -104px rgba(255,255,255, 0.023) , -31px -54px 0 -104px rgba(255,255,255, 0.185) , 23px 136px 0 -104px rgba(255,255,255, 0.15) , 99px -77px 0 -104px rgba(255,255,255, 0.474) , 29px 82px 0 -104px rgba(255,255,255, 0.927) , 123px 64px 0 -104px rgba(255,255,255, 0.054) , -1px -101px 0 -104px rgba(255,255,255, 0.747) , 105px -2px 0 -104px rgba(255,255,255, 0.383) , 51px 93px 0 -104px rgba(255,255,255, 0.193) , -13px -94px 0 -104px rgba(255,255,255, 0.617) , 43px 102px 0 -104px rgba(255,255,255, 0.353) , 72px -51px 0 -104px rgba(255,255,255, 0.612) , -28px 58px 0 -104px rgba(255,255,255, 0.345) , -50px -96px 0 -104px rgba(255,255,255, 0.309) , 3px 144px 0 -104px rgba(255,255,255, 0.092) , 31px 10px 0 -104px rgba(255,255,255, 0.554) , -143px -96px 0 -104px rgba(255,255,255, 0.977) , -107px -114px 0 -104px rgba(255,255,255, 0.65) , 53px 92px 0 -104px rgba(255,255,255, 0.285) , 15px -136px 0 -104px rgba(255,255,255, 0.313) , -131px 4px 0 -104px rgba(255,255,255, 0.114) , 70px -58px 0 -104px rgba(255,255,255, 0.465) , -26px -141px 0 -104px rgba(255,255,255, 0.835) , 53px -136px 0 -104px rgba(255,255,255, 0.591) , 107px 14px 0 -104px rgba(255,255,255, 0.684) , 77px 132px 0 -104px rgba(255,255,255, 0.42) , -77px 121px 0 -104px rgba(255,255,255, 0.914) , 43px -121px 0 -104px rgba(255,255,255, 0.197) , -10px -117px 0 -104px rgba(255,255,255, 0.265) , -108px -73px 0 -104px rgba(255,255,255, 0.958) , 139px -13px 0 -104px rgba(255,255,255, 0.099) , 54px 17px 0 -104px rgba(255,255,255, 0.992) , -85px -39px 0 -104px rgba(255,255,255, 0.133) , 119px 123px 0 -104px rgba(255,255,255, 0.863) , 54px -32px 0 -104px rgba(255,255,255, 0.01) , 11px 136px 0 -104px rgba(255,255,255, 0.05) , -29px 56px 0 -104px rgba(255,255,255, 0.761) , -129px -7px 0 -104px rgba(255,255,255, 0.024) , 101px 23px 0 -104px rgba(255,255,255, 0.367) , 107px 93px 0 -104px rgba(255,255,255, 0.312) , -17px 136px 0 -104px rgba(255,255,255, 0.691) , 141px 109px 0 -104px rgba(255,255,255, 0.641) , -81px 69px 0 -104px rgba(255,255,255, 0.603) , -97px 144px 0 -104px rgba(255,255,255, 0.838) , -138px 140px 0 -104px rgba(255,255,255, 0.134) , 77px -47px 0 -104px rgba(255,255,255, 0.531) , 24px -97px 0 -104px rgba(255,255,255, 0.945) , 55px -88px 0 -104px rgba(255,255,255, 0.399) , 120px -24px 0 -104px rgba(255,255,255, 0.066) , 50px -53px 0 -104px rgba(255,255,255, 0.76) , -63px 15px 0 -104px rgba(255,255,255, 0.065) , 30px -15px 0 -104px rgba(255,255,255, 0.544) , 66px -57px 0 -104px rgba(255,255,255, 0.849) , -65px 79px 0 -104px rgba(255,255,255, 0.226) , 4px -30px 0 -104px rgba(255,255,255, 0.377) , -49px -102px 0 -104px rgba(255,255,255, 0.66) , 139px -53px 0 -104px rgba(255,255,255, 0.137) , 100px 2px 0 -104px rgba(255,255,255, 0.225) , 144px 79px 0 -104px rgba(255,255,255, 0.919) , 76px 33px 0 -104px rgba(255,255,255, 0.497) , -140px -41px 0 -104px rgba(255,255,255, 0.288) , -84px -82px 0 -104px rgba(255,255,255, 0.142) , 24px -71px 0 -104px rgba(255,255,255, 0.938) , 57px -58px 0 -104px rgba(255,255,255, 0.118) , 110px 123px 0 -104px rgba(255,255,255, 0.651) , -113px -57px 0 -104px rgba(255,255,255, 0.139) , -77px -136px 0 -104px rgba(255,255,255, 0.368) , 51px -65px 0 -104px rgba(255,255,255, 0.109) , 40px 134px 0 -104px rgba(255,255,255, 0.408);
}

.pluto {
  height: 780px;
  width: 780px;
  margin-top: -450px;
  margin-left: -320px;
  -webkit-animation: orb 7439.7074054575s linear infinite;
          animation: orb 7439.7074054575s linear infinite;
}
.pluto:before {
  height: 3px;
  width: 3px;
  background: #fff;
  margin-top: -1.5px;
  margin-left: -1.5px;
}

.hide {
  display: none;
}

.links {
  margin-top: 5px !important;
  font-size: 1em !important;
}

@-webkit-keyframes orb {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(-360deg);
  }
}

@keyframes orb {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(-360deg);
  }
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class='description'>
  <h1>Solar System</h1>
  <hr>
  <p>
    Our solar system is a mesmerizing and vast expanse that consists of the Sun, eight planets, numerous moons, asteroids, comets, and other celestial objects :)
  </p>
  
</div>
<div class='solar-syst'>
  <div class='sun'></div>
  <div class='mercury'></div>
  <div class='venus'></div>
  <div class='earth'></div>
  <div class='mars'></div>
  <div class='jupiter'></div>
  <div class='saturn'></div>
  <div class='uranus'></div>
  <div class='neptune'></div>
  <div class='pluto'></div>
  <div class='asteroids-belt'></div>
</div>
<!-- partial -->
  
</body>
</html>
