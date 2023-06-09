@extends('layout')

@section('title')
    Enregistrement
@endsection

@section('content')
    <div class="entete__cadre">  
        <div class="entete">
            <p>Informations de passeport</P>
                
        </div>
    </div>
    <form method="POST" action="" class="container_reservation">
        @csrf
   
      <div class="information_reservation information_reservation--passport">
          <div class="information_reservation__titre">
              <p>{{$nom_client}} {{$prenom_client}}</p>
              

          </div>
          <div class="information_reservation__ligne">
            <select name="nationalite">
                <option value="">Nationalité</option>
                <option value="FR">Française</option>
                <option value="CH">Suisse</option>
                <option value="BE">Belge</option>
                <option value="DE">Allemande</option>
                <option value="IT">Italienne</option>
                <option value="AF">Afghane</option>
                <option value="AL">Albanaise</option>
                <option value="DZ">Algerienne</option>
                <option value="US">Americaine</option>
                <option value="AD">Andorrane</option>
                <option value="AO">Angolaise</option>
                <option value="AG">Antiguaise et barbudienne</option>
                <option value="AR">Argentine</option>
                <option value="AM">Armenienne</option>
                <option value="AU">Australienne</option>
                <option value="AT">Autrichienne</option>
                <option value="AZ">Azerbaïdjanaise</option>
                <option value="BS">Bahamienne</option>
                <option value="BH">Bahreinienne</option>
                <option value="BD">Bangladaise</option>
                <option value="BB">Barbadienne</option>
                <option value="BZ">Belizienne</option>
                <option value="BJ">Beninoise</option>
                <option value="BT">Bhoutanaise</option>
                <option value="BY">Bielorusse</option>
                <option value="MM">Birmane</option>
                <option value="GW">Bissau-Guinéenne</option>
                <option value="BO">Bolivienne</option>
                <option value="BA">Bosnienne</option>
                <option value="BW">Botswanaise</option>
                <option value="BR">Bresilienne</option>
                <option value="GB">Britannique</option>
                <option value="BN">Bruneienne</option>
                <option value="BG">Bulgare</option>
                <option value="BF">Burkinabe</option>
                <option value="BI">Burundaise</option>
                <option value="KH">Cambodgienne</option>
                <option value="CM">Camerounaise</option>
                <option value="CA">Canadienne</option>
                <option value="CV">Cap-verdienne</option>
                <option value="CF">Centrafricaine</option>
                <option value="CL">Chilienne</option>
                <option value="CN">Chinoise</option>
                <option value="CY">Chypriote</option>
                <option value="CO">Colombienne</option>
                <option value="KM">Comorienne</option>
                <option value="CG">Congolaise</option>
                <option value="CR">Costaricaine</option>
                <option value="HR">Croate</option>
                <option value="CU">Cubaine</option>
                <option value="DK">Danoise</option>
                <option value="DJ">Djiboutienne</option>
                <option value="DO">Dominicaine</option>
                <option value="DM">Dominiquaise</option>
                <option value="EG">Egyptienne</option>
                <option value="AE">Emirienne</option>
                <option value="GQ">Equato-guineenne</option>
                <option value="EC">Equatorienne</option>
                <option value="ER">Erythreenne</option>
                <option value="ES">Espagnole</option>
                <option value="TL">Est-timoraise</option>
                <option value="EE">Estonienne</option>
                <option value="ET">Ethiopienne</option>
                <option value="FJ">Fidjienne</option>
                <option value="FI">Finlandaise</option>
                <option value="GA">Gabonaise</option>
                <option value="GM">Gambienne</option>
                <option value="GE">Georgienne</option>
                <option value="GH">Ghaneenne</option>
                <option value="GD">Grenadienne</option>
                <option value="GT">Guatemalteque</option>
                <option value="GN">Guineenne</option>
                <option value="GF">Guyanienne</option>
                <option value="HT">Haïtienne</option>
                <option value="GR">Hellenique</option>
                <option value="HN">Hondurienne</option>
                <option value="HU">Hongroise</option>
                <option value="IN">Indienne</option>
                <option value="ID">Indonesienne</option>
                <option value="IQ">Irakienne</option>
                <option value="IE">Irlandaise</option>
                <option value="IS">Islandaise</option>
                <option value="IL">Israélienne</option>
                <option value="CI">Ivoirienne</option>
                <option value="JM">Jamaïcaine</option>
                <option value="JP">Japonaise</option>
                <option value="JO">Jordanienne</option>
                <option value="KZ">Kazakhstanaise</option>
                <option value="KE">Kenyane</option>
                <option value="KG">Kirghize</option>
                <option value="KI">Kiribatienne</option>
                <option value="KN">Kittitienne-et-nevicienne</option>
                <option value="XK">Kossovienne</option>
                <option value="KW">Koweitienne</option>
                <option value="LA">Laotienne</option>
                <option value="LS">Lesothane</option>
                <option value="LV">Lettone</option>
                <option value="LB">Libanaise</option>
                <option value="LR">Liberienne</option>
                <option value="LY">Libyenne</option>
                <option value="LI">Liechtensteinoise</option>
                <option value="LT">Lituanienne</option>
                <option value="LU">Luxembourgeoise</option>
                <option value="MK">Macedonienne</option>
                <option value="MY">Malaisienne</option>
                <option value="MW">Malawienne</option>
                <option value="MV">Maldivienne</option>
                <option value="MG">Malgache</option>
                <option value="ML">Malienne</option>
                <option value="MT">Maltaise</option>
                <option value="MA">Marocaine</option>
                <option value="MH">Marshallaise</option>
                <option value="MU">Mauricienne</option>
                <option value="MR">Mauritanienne</option>
                <option value="MX">Mexicaine</option>
                <option value="FM">Micronesienne</option>
                <option value="MD">Moldave</option>
                <option value="MC">Monegasque</option>
                <option value="MN">Mongole</option>
                <option value="ME">Montenegrine</option>
                <option value="MZ">Mozambicaine</option>
                <option value="NA">Namibienne</option>
                <option value="NR">Nauruane</option>
                <option value="NL">Neerlandaise</option>
                <option value="NZ">Neo-zelandaise</option>
                <option value="NP">Nepalaise</option>
                <option value="NI">Nicaraguayenne</option>
                <option value="NG">Nigeriane</option>
                <option value="NE">Nigerienne</option>
                <option value="KP">Nord-coréenne</option>
                <option value="NO">Norvegienne</option>
                <option value="OM">Omanaise</option>
                <option value="UG">Ougandaise</option>
                <option value="UZ">Ouzbeke</option>
                <option value="PK">Pakistanaise</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinienne</option>
                <option value="PA">Panameenne</option>
                <option value="PG">Papouane-neoguineenne</option>
                <option value="PY">Paraguayenne</option>
                <option value="PE">Peruvienne</option>
                <option value="PH">Philippine</option>
                <option value="PL">Polonaise</option>
                <option value="PR">Portoricaine</option>
                <option value="PT">Portugaise</option>
                <option value="QA">Qatarienne</option>
                <option value="RO">Roumaine</option>
                <option value="RU">Russe</option>
                <option value="RW">Rwandaise</option>
                <option value="LC">Saint-Lucienne</option>
                <option value="SM">Saint-Marinaise</option>
                <option value="VC">Saint-Vincentaise-et-Grenadine</option>
                <option value="SB">Salomonaise</option>
                <option value="SV">Salvadorienne</option>
                <option value="WS">Samoane</option>
                <option value="ST">Santomeenne</option>
                <option value="SA">Saoudienne</option>
                <option value="SN">Senegalaise</option>
                <option value="RS">Serbe</option>
                <option value="SC">Seychelloise</option>
                <option value="SL">Sierra-leonaise</option>
                <option value="SG">Singapourienne</option>
                <option value="SK">Slovaque</option>
                <option value="SI">Slovene</option>
                <option value="SO">Somalienne</option>
                <option value="SD">Soudanaise</option>
                <option value="LK">Sri-lankaise</option>
                <option value="ZA">Sud-africaine</option>
                <option value="KR">Sud-coréenne</option>
                <option value="SE">Suedoise</option>
                <option value="SR">Surinamaise</option>
                <option value="SZ">Swazie</option>
                <option value="SY">Syrienne</option>
                <option value="TJ">Tadjike</option>
                <option value="TW">Taiwanaise</option>
                <option value="TZ">Tanzanienne</option>
                <option value="TD">Tchadienne</option>
                <option value="CZ">Tcheque</option>
                <option value="TH">Thaïlandaise</option>
                <option value="TG">Tonguienne</option>
                <option value="TG">Tonguienne</option>
                <option value="TT">Trinidadienne</option>
                <option value="TN">Tunisienne</option>
                <option value="TM">Turkmene</option>
                <option value="TR">Turque</option>
                <option value="TV">Tuvaluane</option>
                <option value="UA">Ukrainienne</option>
                <option value="UY">Uruguayenne</option>
                <option value="VU">Vanuatuane</option>
                <option value="VE">Venezuelienne</option>
                <option value="VN">Vietnamienne</option>
                <option value="YE">Yemenite</option>
                <option value="ZM">Zambienne</option>
                <option value="ZW">Zimbabweenne</option>
            </select>

          </div>
          <div class="information_reservation__ligne">
            <input name="numero_passeport" required value= {{old('num_passeport') }}>
                <label for="numero_passeport" class="information_reservation__label"><span class="information_reservation__contenue">Numero de passeport</span></label>
            </div>
            <div class="reservation__erreur">                        @if($errors->has('numero_passeport'))
                            {{$errors->first('numero_passeport')}}
                        @endif    
                        </div>
            <div class="information_reservation__ligne">
                <input name="confirmer_numero_passeport"required >
                    <label for="confirmer_numero_passeport" class="information_reservation__label"><span class="information_reservation__contenue">Confirmer numero de passeport</span></label>
            </div>
            <div class="reservation__erreur">                          @if($errors->has('confirmer_numero_passeport'))
                            {{$errors->first('confirmer_numero_passeport')}}
                        @endif    
                        </div>


            <div class="information_reservation__ligne">
                <input type="text" name="date_expiration_passeport" id="date_de_naissance_passport" required  autocomplete="off">
                    <label for="date_expiration_passeport" class="information_reservation__label"><span class="information_reservation__contenue">Date d'expiration</span></label>
                </div>
                <div class="reservation__erreur">                         @if($errors->has('date_expiration_passeport'))
                            {{$errors->first('date_expiration_passeport')}}
                        @endif    
                        </div>
            


                <div class="enregistrement__btns">
                    <a href={{route('/enregistrement/information')}}>  <input type="button" class="" value="Retour"> </a>
                    <a href="">  <input type="submit" class="" value="Suivant" formnovalidate> </a>
                  </div>
                  <div class="enregistrement_erreur">
                         @if (isset($error))
                            {{$error}}
                        @endif    
                        </div>
                  


                    
      </div>

      




    </form>


    @endsection
