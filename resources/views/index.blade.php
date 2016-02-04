<style>
    body {
        background: #323232;
    }

    .round-button {
        width: 15em;
        max-width:50%;
        min-width: 6em;
    }
    .round-button-circle {
        width: 100%;
        height:0;
        padding-bottom: 100%;
        border-radius: 50%;
        border:10px solid #7f7f7f;
        overflow:hidden;
        background: #CC0000;
        box-shadow: 0 0 3px black;
    }
    .round-button-circle:hover {
        background:#b70000;
    }
    .round-button a {
        display:block;
        float:left;
        width:100%;
        padding-top:50%;
        padding-bottom:50%;
        line-height:1em;
        margin-top:-0.5em;
        text-align:center;
        color:#e2eaf3;
        font-family:Verdana;
        font-size:1.2em;
        font-weight:bold;
        text-decoration:none;
    }
</style>

<div class="round-button">
    <div class="round-button-circle">
        <a href="http://button.localhost" class="round-button-link">button</a>
    </div>
</div>