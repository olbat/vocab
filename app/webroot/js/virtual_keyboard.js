// Load the Google Onscreen Keyboard API
google.load("elements", "1", {
	packages: "keyboard"
});

function onLoad() {
	var kbd_EN = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.ENGLISH], ['vkeyboard_EN']);
	var kbd_FR = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.FRENCH], ['vkeyboard_FR']);
	var kbd_GE = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.GERMAN], ['vkeyboard_GE']);
	//var kbd_SP = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.SPANISH, ['vkeyboard_SP']);
	var kbd_IT = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.ITALIAN], ['vkeyboard_IT']);
	var kbd_RU = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.RUSSIAN], ['vkeyboard_RU']);
	var kbd_PL = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.POLISH], ['vkeyboard_PL']);
	var kbd_TH = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.THAI], ['vkeyboard_TH']);
	var kbd_AR = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.ARABIC], ['vkeyboard_AR']);
	var kbd_GR = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.GREEK], ['vkeyboard_GR']);
	var kbd_HB = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.HEBREW], ['vkeyboard_HB']);
	var kbd_TK = new google.elements.keyboard.Keyboard([google.elements.keyboard.LayoutCode.TURKISH], ['vkeyboard_TK']);
}

function toggleVisible() {
	var button = document.getElementById("vkeyboard_visible");
	if (kbd.isVisible()) {
		kbd.setVisible(false);
		document.getElementById('vkeyboard_visible').value = "Show";
	} else {
		kbd.setVisible(true);
		document.getElementById('vkeyboard_visible').value = "Hide";
	}
}
google.setOnLoadCallback(onLoad);