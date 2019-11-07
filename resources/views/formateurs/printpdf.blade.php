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
           
  
        <!--startprint-->
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                
                             {{--  <img src="https://img.freepik.com/photos-gratuite/drapeau-senegalais_7594-136.jpg?size=626&ext=jpg"  alt="Ministére de l'emploi et de la formation professionnelle"  height="50" width="50">  --}}
                            {{--   <img src="formateurs/sn.png" height="350" width="400" > --}}
                            REPUBLIQUE DU SENEGAL<br>
                            Un peuple - Un But - Une Foi<br>
                            _____________<br>
                            Ministére de l'Emploi de la Formation<br>  Professionnelle et de l'Artisanat<br>
                            _____________<br> 
                            <h4> {{$formateur->service->nom}}<br><br><br><br></h4>
                          {{--   <i class="text-center" ></i> --}}
                            
                              <div style='text-align:center'>
                                <h4> <strong>INFORMATIONS GENERALES SUR LA DEMANDE</strong></h4>
                                <h5> <strong> Demande de formation : </strong>{{$formateur->type_formation}}</h5>

                              </div>
                              <td>
                                
                                    <strong> MEFPA/CAB/SG/DRH  </strong>         
                                        
                                 </td> 
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
                              <strong>   NOM : </strong> {{$formateur->nom}}
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>
                                        <strong> PRENOM : </strong>{{$formateur->prenom}} 
                                </td>
                          </tr>
                          <tr>
                                <td>
                              <strong>   E-mail :</strong> {{$formateur->email}}
                                  
                                </td>
                            </tr>
                            <tr>
                                <td>
                                        <strong> ADRESSE : </strong>{{$formateur->adresse}} 
                                </td>
                          </tr>
                          <tr>
                                <td>
                                        <strong> DATE ET LIEU DE NAISSANCE :</strong> {{$formateur->date_naissance}} à {{$formateur->lieu_naissance}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                        <strong> DIPLOME : </strong>{{$formateur->diplomes}}
                                </td>
                            </tr>
                                <tr>
                                <td>
                                        <strong> CNI :</strong> {{$formateur->cni}}        <br> 
                                </td>
                            </tr>
                                <tr>
                                <td>
                                        <strong> MATRICULE : </strong>{{$formateur->matricule}}<br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                        <strong> TELEPHONE : </strong>{{$formateur->telephone}}    <br>
                                </td>
                            </tr>
                             {{--    <tr>
                                <td>
                                    Type de formation:{{$formateur->type_formation}}    <br>
                                </td>
                            </tr> --}}
                        </table>
                    </td>
                </tr>
                
                <tr class="heading">
                    <td>
                     <strong>   SPECIALITES : </strong>
                    </td>
                    
                    <td>{{$formateur->specialite}} 
                            </td>
                </tr>
            <tr>
                <td>
                 </td>
                </tr>
                 <td>
                </td>
            <tr>
                <td>
                </td>
            </tr>
                
                <tr class="heading">
                    <td>
                            <strong> Nom de la piece</strong>
                    </td>
                    
                    <td>
                            <strong> Fichier joint</strong>
                    </td>
                
                     
                </tr>

            @foreach ($formateur->pieces as $piece) 

            <tr class="details">
                
                <td>
                {{$piece->nom}} <br> 
            </td>

                <td>

                {{$piece->fichier}} <br> 
                </td>
                <td>
                     
                </td>
                @endforeach

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
      
            
   


</body>


</html>


