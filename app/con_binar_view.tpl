{extends file="../szablon/home.tpl"}

{block name=content}

<h2 class="content-head is-center" style="padding-left: 2em;margin-top: 2em;">Konwerter binarny</h2>

<section id="two" >
	<div class="content_2" style="height: auto; padding: 3em; ">
		<form class="pure-form pure-form-stacked" action="{$app_url}/app/con_binar.php#one" method="post">
			<fieldset >
	
				<label for="binar" class="id_label" >Podaj liczbę w systemie dziesiętnym: </label>
				<input id="id_bin" style="width:20%;" type="text" placeholder="Liczba" name="binarny" value="{$form['binarny']}"/>
	
				<button type="submit" style="margin-top: 1em;" class="button primary">Przelicz</button>
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
</div>


{/block}
