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
<div id="mymodule_block_home" class="block mymodule_block_home">
    <h4>{l s='Weather' mod='mymodule'}</h4>
    <div class="block_content">
        {if isset($temperatureC) && isset($temperatureF)}
            <p>Current temperature: {$temperatureC|round:1}°C / {$temperatureF|round:1}°F</p>
        {else}
            <p>Temperature data not available.</p>
        {/if}

        {if isset($weatherDescription)}
            <p>Weather: {$weatherDescription}</p>
        {else}
            <p>Weather description not available.</p>
        {/if}

        {if isset($weatherIcon)}
            <div class="weather-icon">
                <img src="{$weatherIcon}" alt="Weather Icon" />
            </div>
        {/if}

        <p class="klikmi">
            <a href="{$my_module_link}" title="Click to enter">Enter</a>
            <a href="http://bbc.co.uk/sport" title="Sports">Sport</a>
        </p>
    </div>
</div>