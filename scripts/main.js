console.log('test');

const hamburgerButton = document.getElementById('hamburger-button');
const spMenu = document.querySelector('.sp-menu');
const toggleMenu=()=>{
	spMenu.classList.toggle('open');
}
hamburgerButton.addEventListener('click',toggleMenu)


// ブラウザ幅が960こえていて、spMenu openのときに　openクラスをはずす
function switchByWidth(){
	if(window.matchMedia('(min-width:959px)').matches) {
		//PC処理
		if(spMenu.classList.contains('open')){
			spMenu.classList.toggle('open');
		}
	};

};
//ロードとリサイズの両方で同じ処理を付与する
window.onload = switchByWidth;
window.onresize = switchByWidth;

// サブメニュー表示非表示

// const subMenu = document.querySelector('.sub-menu');
// const navMaterial=document.getElementById('menu-item-70')

// navMaterial.addEventListener('mouseover',function(){
// 	subMenu.classList.toggle('sub-menu-open');
// });
