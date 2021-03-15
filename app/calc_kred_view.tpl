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

<div class="results">
    <style>
        .results h4{
            padding-left: 2em;
            margin-top: 2em;
        }
        .results ul{
            padding-left: 3em;
        }
        .res {
            padding-left: 2em;
           
        }
    </style>
    
{if isset($messages)}
    
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ul>
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
		<ul>
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ul>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik:</h4>
        <h3><p class="res">
            {$result}
        </p>
		</h3>
        
{/if}

</div>


{/block}