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
    <h4><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#e8eaed">
            <path
                d="M446.67-766.67V-920h66.66v153.33h-66.66ZM706-659.33l-46.33-46.34 108-109.66 46.66 47.66L706-659.33Zm60.67 212.66v-66.66H920v66.66H766.67ZM446.67-40v-153.33h66.66V-40h-66.66ZM253.33-660.67l-108-107 47-46.66L300.67-706l-47.34 45.33ZM768-145.33l-108.33-109L705-299.67l110 106-47 48.34ZM40-446.67v-66.66h153.33v66.66H40Zm153 301.34-47.33-47L253-299.67l24.33 22.34L301.67-254 193-145.33ZM480-240q-100 0-170-70t-70-170q0-100 70-170t170-70q100 0 170 70t70 170q0 100-70 170t-170 70Zm0-66.67q72 0 122.67-50.66Q653.33-408 653.33-480t-50.66-122.67Q552-653.33 480-653.33t-122.67 50.66Q306.67-552 306.67-480t50.66 122.67Q408-306.67 480-306.67ZM480-480Z" />
        </svg>{l s='Weather' mod='mymodule'}</h4>
    <div class="block_content">
        {if isset($temperatureC) && isset($temperatureF)}
            <p>Current temperature: {$temperatureC|round:1}<sup>°C</sup> in Olsztyn, ({$temperatureF|round:1}<sup>°F</sup>)
            </p>
        {else}
            <p>Temperature data not available.</p>
        {/if}

        {if isset($weatherDescription)}
            <p>Outlook: {$weatherDescription}</p>
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