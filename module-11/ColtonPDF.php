<!DOCTYPE html>
<html lang='en'>
<!--
    Colton Stone, Assignment 11.2, October 9, 2026
-->

<title>PDF Page</title>

<?php
  require('./fpdf.php');

class PDF_MC_Table extends FPDF
{
    protected $widths;
    protected $aligns;

    function Header()
    {
        $this->SetFont('Courier', 'B', 25);
        $this->Cell(80);
        $this->Cell(30, 10, 'Baseball Stat Records', 5, 0, 'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Courier', 'I', 15);
        $this->Cell(0, 10, 'Page '.$this->PageNo(), 0, 0, 'C');
    }


    function SetWidths($w)
    {
        $this->widths = $w;
    }

    function SetAligns($a)
    {
        $this->aligns = $a;
    }

    function Row($data)
    {
        $nb = 0;
        for($i=0;$i<count($data);$i++)
            $nb = max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h = 6*$nb;
        $this->CheckPageBreak($h);
        for($i=0;$i<count($data);$i++)
        {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
            $x = $this->GetX();
            $y = $this->GetY();
            $this->Rect($x,$y,$w,$h);
            $this->MultiCell($w,6,$data[$i],0,$a);
            $this->SetXY($x+$w,$y);
        }
        // Go to the next line
        $this->Ln($h);
    }

    function CheckPageBreak($h)
    {
        if($this->GetY()+$h>$this->PageBreakTrigger)
            $this->AddPage($this->CurOrientation);
    }

    function NbLines($w, $txt)
    {
        if(!isset($this->CurrentFont))
            $this->Error('No font has been set');
        $cw = $this->CurrentFont['cw'];
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $wmax = ($w-2*$this->cMargin)*1000/$this->FontSize;
        $s = str_replace("\r",'',(string)$txt);
        $nb = strlen($s);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $sep = -1;
        $i = 0;
        $j = 0;
        $l = 0;
        $nl = 1;
        while($i<$nb)
        {
            $c = $s[$i];
            if($c=="\n")
            {
                $i++;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
                continue;
            }
            if($c==' ')
                $sep = $i;
            $l += $cw[$c];
            if($l>$wmax)
            {
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                }
                else
                    $i = $sep+1;
                $sep = -1;
                $j = $i;
                $l = 0;
                $nl++;
            }
            else
                $i++;
        }
        return $nl;
    }


}


  $pdf=new PDF_MC_Table('L');

    $pdf->AliasNbPages();
    $pdf->AddPage('L');
    $pdf->SetAutoPageBreak(true, 15); 
    $pdf->SetFont('Courier','B',20);
    $pdf->SetTextColor(100, 0, 0);
    $pdf->Multicell(0,10,'This page displays a record of the lifelong statistical data of multiple
baseball teams from the website www.baseball-reference.com.');

    $pdf->ln(50);
    
    $pdf->SetFont('Courier','B',15);
    $pdf->SetTextColor(100, 0, 0);
    $pdf->SetWidths(array(40, 40, 40, 40, 40, 40, 40, 40));
    $pdf->Row(array("Team Name", "Wins", "Losses", "Win-Loss Percentage", "Seasons Played", "World Championships", "Year of Origin"));
    $pdf->Row(array("Atlanta_Braves", "11280", "11099", ".504", "151", "4", "1876"));
    $pdf->Row(array("Cincinnati_Reds", "11089", "10927", ".504", "145", "5", "1882"));
    $pdf->Row(array("Detroit_Tigers", "9836", "9723", ".503", "126", "4", "1901"));
    $pdf->Row(array("Houston_Astros", "5173", "5117", ".503", "65", "2", "1962"));
    $pdf->Row(array("Miami_Marlins", "2458", "2870", ".461", "34", "2", "1993"));
    $pdf->Row(array("Minnesota_Twins", "9401", "10129", ".481", "126", "3", "1901"));
    $pdf->Row(array("Pittsburgh_Pirates", "10987", "10987", ".500", "145", "5", "1882"));
    $pdf->Row(array("SanFranciso_Giants", "11686", "10190", ".534", "144", "8", "1883"));
    $pdf->Row(array("Texas_Rangers", "4976", "5460", ".477", "66", "1", "1961"));
    $pdf->Row(array("Toronto_BlueJays", "3931", "3934", ".500", "50", "2", "1977"));

    ob_end_clean(); 
    $pdf->Output();


  
?>    
