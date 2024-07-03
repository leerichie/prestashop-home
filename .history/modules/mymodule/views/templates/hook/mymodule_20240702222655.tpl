{* <!-- Block mymodule -->
<div id="mymodule_block_home" class="block">
    <h4>{l s='Welcome!' mod='mymodule'}</h4>
    <div class="block_content">
        <p>Hello, World!</p>

        <p>Current temp: {$temperature}°C {($temperature1)}°F</p>
        <p>Weather: {$weatherDescription}</p>

        {if isset($my_module_name) && $my_module_name}
                {$my_module_name}
            {else}
                World
            {/if} *}

{* <ul>
            <li><a href="{$my_module_link}" title="Click this link">Click me!</a></li>
        </ul>
    </div>
</div> *}
<!-- /Block mymodule -->



<!-- views/templates/hooks/display.tpl -->


<style>
    .mymodule_block_home {
        margin-top: 50px;
        font-size: 150%;
        font-style: italic;
        margin-bottom: 50px;
    }

    #click:hover {
        font-size: larger;
    }
</style>


<div id="mymodule_block_home" class="block">
    <h4>{l s='Weather' mod='mymodule'}</h4>
    <div class="block_content">
        {if isset($temperature) && $temperature !== null}
            <p>Current temperature: {$temperature}°C</p>
        {else}
            <p>Temperature data not available.</p>
        {/if}

        {if isset($weatherDescription) && $weatherDescription !== null}
            <p>Weather: {$weatherDescription}</p>
        {else}
            <p>Weather description not available.</p>
        {/if}
        <a href="{$my_module_link}" title="Click this link" id="click">Click me!</a>
    </div>
</div>