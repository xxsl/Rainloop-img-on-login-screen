$(function () {
	if (window.rl && window.rl && !window.rl.settingsGet('Auth'))
	{
		var image_url = 'url(\"' + window.rl.pluginSettingsGet('img-on-login-screen', 'url') + '\")'
		document.querySelector("#rl-bg").classList.remove("thm-body");		
		document.querySelector("#rl-bg").style.backgroundImage = image_url;
	}
});
