<?php ob_start(); 
// deleting a ticket
if(isset($_POST['id'])) {
$id = trim($_POST['id']);
$descriptionTicket = trim($_POST['descriptionTicket']);
$typeTicket = trim($_POST['typeTicket']);
$materiel = trim($_POST['materiel']);
$time = trim($_POST['time']);
}
?>
<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <title>Nouvel entete.docx</title>
    <style>
    /* Font Definitions */
    @font-face {
        font-family: Wingdings;
        panose-1: 5 0 0 0 0 0 0 0 0 0;
    }

    @font-face {
        font-family: "Cambria Math";
        panose-1: 2 4 5 3 5 4 6 3 2 4;
    }

    @font-face {
        font-family: "Microsoft Sans Serif";
        panose-1: 2 11 6 4 2 2 2 2 2 4;
    }

    /* Style Definitions */
    p.MsoTitle span,
    li.MsoTitle span,
    div.MsoTitle span,
    p.MsoTitle,
    li.MsoTitle,
    div.MsoTitle {
        margin-top: 0cm;
        margin-right: 93.3pt;
        margin-bottom: 0cm;
        margin-left: 112.75pt;
        text-align: center;
        text-autospace: none;
        font-size: 17.0px;
        font-family: "Times New Roman", serif;
        font-weight: bold;
        text-decoration: underline;
    }

    p.MsoBodyText span,
    li.MsoBodyText span,
    div.MsoBodyText span,
    p.MsoBodyText,
    li.MsoBodyText,
    div.MsoBodyText {
        margin: 0cm;
        text-autospace: none;
        font-size: 14.0px;
        font-family: "Times New Roman", serif;
    }

    .MsoChpDefault {
        font-family: "Calibri", sans-serif;
    }

    .MsoPapDefault {
        text-autospace: none;
    }

    @page WordSection1 {
        size: 596.0pt 842.0pt;
        margin: 37.0pt 36.0pt 14.0pt 37.0pt;
    }

    div.WordSection1 {
        page: WordSection1;
    }

    /* List Definitions */
    ol {
        margin-bottom: 0cm;
    }

    ul {
        margin-bottom: 0cm;
    }
    </style>

</head>

<body lang=fr-DZ style='word-wrap:break-word'>

    <div class=WordSection1>

        <p class=MsoBodyText style='margin-left:7.05px'><span lang=FR style='font-size:
10.0px'><img width=684 height=178 id=image1.png src="tmp2_fichiers/image001.png"></span></p>

        <p class=MsoBodyText style='margin-top:.45px'><span lang=FR style='font-size:
9.0px'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:4.4px'><span lang=FR>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:4.4px'><span lang=FR>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:4.4px'><span lang=FR>Alger<span style='letter-spacing:-.3px'>
                </span>le<span style='letter-spacing:-.25px'> </span><?php echo date("d/m/Y");  ?></span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:.25px'><span lang=FR style='font-size:
16.0px'>Numero : <?php echo $id;?></span></p>

        <p class=MsoBodyText style='margin-top:.25px'><span lang=FR style='font-size:
16.0px'>Service : compxabilite</span></p>

        <p class=MsoBodyText style='margin-top:.25px'><span lang=FR style='font-size:
16.0px'>Emploie : Youssra</span></p>

        <p class=MsoBodyText style='margin-top:.25px'><span lang=FR style='font-size:
16.0px'>&nbsp;</span></p>

        <p class=MsoTitle><u><span lang=FR style='font-size:20.0px'>BON DE COMMANDE</span></u></p>

        <p class=MsoTitle style='margin-left:72.0px'><u><span lang=FR><span
                        style='text-decoration:none'>&nbsp;</span></span></u></p>

        <p class=MsoBodyText><b><u><span lang=FR style='font-size:16.0px'>Type</span></u></b><span lang=FR
                style='font-size:16.0px'> : <?php echo $typeTicket;?> </span></p>

        <p class=MsoBodyText><b><u><span lang=FR style='font-size:16.0px'>Materiel</span></u></b><span lang=FR
                style='font-size:16.0px'> : <?php echo $materiel;?> </span></p>

        <!-- <p class=MsoBodyText><span lang=FR
                style='font-size:16.0px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </span></p> -->

        <p class=MsoBodyText><b><u><span lang=FR style='font-size:16.0px'>Date, heure</span></u></b><b><span lang=FR
                    style='font-size:16.0px'> : le</span></b><span lang=FR style='font-size:16.0px'>
                <?php echo $time;?></span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:16.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR
                style='font-size:16.0px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span></p>

        <p class=MsoBodyText><b><span lang=FR style='font-size:19.0px'>&nbsp;</span></b></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:15.0px'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:.45px'><span lang=FR style='font-size:
13.0px'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-left:5.5px'><span lang=FR>Le<span style='letter-spacing:-.2px'>
                </span>Responsable<span style='letter-spacing:
-.2px'> </span>CSI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Le<span style='letter-spacing:-.3px'> </span>Responsable<span style='letter-spacing:
-.3px'> </span>du<span style='letter-spacing:-.3px'> </span>service<span style='letter-spacing:-.3px'>
                </span>demandeur</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText><span lang=FR style='font-size:10.0px'>&nbsp;</span></p>

        <p class=MsoBodyText style='margin-top:.45px'>

        <table cellpadding=0 cellspacing=0 align=left>
            <tr>
                <td width=59 height=0></td>
            </tr>
            <tr>
                <td></td>
                <td><img width=670 height=17 src="tmp2_fichiers/Image1.jpg"></td>
            </tr>
        </table>

        <br clear=ALL>
        </p>

    </div>

</body>

</html>
<?php
$template = ob_get_clean();
require_once __DIR__ . '/vendor/autoload.php';
 $mpdf = new \Mpdf\Mpdf();
 $mpdf->WriteHTML($template);
 $mpdf->Output();
?>