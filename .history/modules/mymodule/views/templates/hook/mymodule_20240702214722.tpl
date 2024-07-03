<!-- Block mymodule -->
<div id="mymodule_block_home" class="block">
    <h4>{l s='Welcome!' mod='mymodule'}</h4>
    <div class="block_content">
        <p>Hello, World!</p>
        <p>Current temp: {$temperature}C</p>
        <p>Weather: {$weatherDescription}</p>



        {* {if isset($my_module_name) && $my_module_name}
                {$my_module_name}
            {else}
                World
            {/if} *}


        <ul>
            <li><a href="{$my_module_link}" title="Click this link">Click me!</a></li>
        </ul>
    </div>
</div>
<!-- /Block mymodule -->