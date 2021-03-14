{extends file="../szablon/home.tpl"}

{block name=content}

<h2 class="content-head is-center" style="padding-left: 2em; margin-top: 2em;">Kalkulator kredytowy</h2>

<section id="one" >
	<div class="content_2" style="height: auto; padding: 3em; ">
		<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc_kred.php#one" method="post">
			<fieldset >
	
				<label for="kwota" class="id_label" >Podaj kwotę: </label>
				<input id="id_x" style="width:20%;" type="text" placeholder="Kwota" name="kwota" value="{$form['kwota']}"/>
	
				<label for="lata" class="id_label" >Podaj lata:</label>
				<input id="id_y" style="width:20%;" type="text" placeholder="Ilość lat" name="lata" value="{$form['lata']}"/>
	
				<label for="oprc" class="id_label">Podaj oprocentowanie:</label>
				<input id="id_z" style="width:20%;" type="text" placeholder="Oprocentowanie" name="oprc" value="{$form['oprc']}"/>
	
				<button type="submit" style="margin-top: 1em;" class="button primary">Oblicz</button>
			</fieldset>
		</form>
                
	</div>
	
</section>

<div class="results_kred">
    <style>
        .results_kred h4{
            padding-left: 2em;
            margin-top: 2em;
        }
        .results_kred ul{
            padding-left: 3em;
        }
        .res {
            padding-left: 2em;
           
        }
        
    </style>
    
{if isset($messages)}
    
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ul class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ul>
	{/if}
{/if}

{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ul class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ul>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik:
        <p class="res">
            {$result}
        </p>
	</h4>
        
{/if}

</div>


{/block}

{block name=content_con }

<h2 class="content-head is-center" style="padding-left: 2em; padding-top: 1em; ">Konwerter binarny</h2>

<section id="two"  >
	<div class="content_2" style="height: auto; padding: 3em;  ">
		<form class="pure-form pure-form-stacked" action="{$app_url}/app/con_binar.php#two" method="post">
			<fieldset >
	
				<label for="binarny" class="id_label" >Podaj liczbę w systemie dziesiętnym: </label>
				<input id="id_bin" style="width:20%;" type="text" placeholder="Liczba" name="binarny" value="{$form['binarny']}"/>
	
				<button type="submit" style="margin-top: 1em;" class="button primary">Przelicz</button>
			</fieldset>
		</form>
	</div>
	
</section>

<div class="results_binar">
    <style>
        .results_binar h4{
            padding-left: 2em;
            margin-top: 2em;
        }
        .results_binar ul {
            padding-left: 3em;
        }
        .res {
            padding-left: 2em;
        }
        
    </style>
    

</div>


{/block}