 @extends('layout.default') 
@section('content') 

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestion de Formation Diplomante</title>
    

    {{-- <link rel="stylesheet" href="#" type="text" media="print" />  --}}
    <style>
        
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
      /*   #impression{
        display : none;
      } */
       
    }
   
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    /* #impression{
        display : none;
      } */
    /*   #printBox{
  text-align:center;
width: 500px;
  margin:auto;
}

.Printbutton{
  display:inline-block;
  color:#fff;
  cursor:pointer;
  background-color:#3e87ec;
  padding:20px;
  margin:5px;
}


@media print {
  
  .Printbutton{
display:none;
} 
  
} */
    </style>
   
    
</head>
 
<body>
    <div class="invoice-box">
        <!--startprint-->
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                
                              <img src="https://img.freepik.com/photos-gratuite/drapeau-senegalais_7594-136.jpg?size=626&ext=jpg"  alt="Ministére de l'emploi et de la formation professionnelle"  height="50" width="50"> 
                            {{--   <img src="formateurs/sn.png" height="350" width="400" > --}}
                            
                                    Ministére de l'emploi et de la formation professionnelle
                            
                         </td>
                            
                            <td>
                                
                                Nom service : {{$formateur->service->nom}}<br>
                                
                            </td>
                        </tr>
                        
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        
                        <tr>
                            <td>
                              Nom : {{$formateur->nom}} Prenom :{{$formateur->prenom}}<br> 
                                Date et lieu de Naissance: {{$formateur->date_naissance}} {{$formateur->lieu_naissance}}<br>
                                Diplomes: {{$formateur->diplomes}}
                            </td>
                            
                            <td>
                                CNI:  {{$formateur->cni}}        <br> 
                                Matricule:{{$formateur->matricule}}<br>
                                Telephone:{{$formateur->telephone}}    <br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Specialités : 
                </td>
                
                <td>
                        @foreach ($specialites as $specialite) 

                        {{$specialite->nom}} <br> 
                          @endforeach  
                        </td>
            </tr>
            
            <tr class="details">
                <td>
                   
                </td>
                
                <td>
                    
                </td>
            </tr>
       
            <tr class="heading">
                <td>
                    Piéces
                </td>
                
                <td>
                        @foreach ($pieces as $piece) 

                        {{$piece->nom}} <br> 
                          @endforeach
                </td>
            </tr>
          
           {{--  <tr class="item">
                <td>
                    Website design
                </td>
                
                <td>
                    $300.00
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Hosting (3 months)
                </td>
                
                <td>
                    $75.00
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Domain name (1 year)
                </td>
                
                <td>
                    $10.00
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: $385.00
                </td>
            </tr> --}}
           
        </table>
        <!--endprint-->
               
        {{-- <ul class="fa-ul">
            <li><span class="fa-li fa fa-check-square"></span>Vérifier</li>
            <li><span class="fa-li fa fa-paperclip"></span>Conserver</li>
            <li><span class="fa-li fa fa-eraser"></span>Effacer</li>
            <li><span class="fa-li fa fa-print"></span>Imprimer</li>
          </ul> --}}
          {{-- <form action="{{route('formateurs.affichage')}}" methode ="post" >
                <div class="invoice-box">

                <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer la page" />
               </div>
        </form> --}}
      {{--   <a href="{{ route('formateurs.affichage',['download'=>'pdf']) }}">Télécharger PDF</a> --}}
        {{-- <div id="printBox">
  
                <div class="Printbutton" onclick="myFunction()"  >
                 Imprimer la page</div>
                 
                <script>
                function myFunction() {
                    window.print();
                }
                  
                </script>
                  </div>   --}}
                 
    
                   <div id="btnPrint">
                  <input  type="button" value="imprimer" onclick="doPrint()" />

                  <script language="JavaScript" type="text/JavaScript">
                    function doPrint() {
                    bdhtml=window.document.body.innerHTML;
                    sprnstr="<!--startprint-->";
                    eprnstr="<!--endprint-->";
                    prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr)+17);
                    prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));
                    window.document.body.innerHTML=prnhtml;
                    window.print();
                    }
            </script>
             </div>
            
                  
    </div>

   

</body>


</html>
 @endsection 


