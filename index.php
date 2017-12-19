<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Developer media library">
	<meta name="keywords" content="media, images, audios, videos, api">
	<meta name="author" content="Mikael Sundström">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Index</title>
	<link rel="icon" href="img/m.png" type="image/x-icon" />
	<link rel="stylesheet" href="./css/thriller.css">
</head>

<body>
	<header>
		<!-- Side nav -->
		<ul id="navigation">
			<svg class="logo" viewBox="0 0 32 8" fill="#472243">
				<path d="M0 0L0 8L2 8L3 4L4 6L5 4L6 8L8 8L8 0Z" />
				<path d="M0 0L14 0L17 1L9 3L12 4L9 5L17 7L13 8L7 8L7 0Z" />
				<path d="M13 8L13 0L17 0L21 4L17 8ZM16 6L18 4L16 2Z" />
				<path d="M19 0L19 8L26 8L26 0Z" />
				<path d="M24 8L28 0L30 0L34 8L0 8ZM28 6L30 6L29 2Z" />
				<path fill-opacity="0" stroke="#fff" stroke-width="0.3" stroke-opacity="1" d="M0 7.95L2 7.95L3 4L4 6L5 4L6 7.95L17 7.95L19 6L19 7.95L32 7.95M28 6L30 6L29 2ZM17 0L19 2L19 0M28 0L26 4L26 0M32 4L30 0M18 4L16 6L16 2ZM9 3L12 4L9 5L13 6L13 2Z" />
			</svg>
			<a class="hide-on-small-screen">
				<svg height="24" width="24">
					<path fill="#fff" d="M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z" />
				</svg>
			</a>
			<li>
				<a>
					Football
					<small>1233</small>
				</a>
			</li>
			<li>
				<a>
					Flags
					<small>216</small>
				</a>
			</li>
			<li>
				<a>
					Icehockey
					<small>6</small>
				</a>
			</li>
			<li>
				<a>
					<?php echo 'Sprites'; ?>
					<small>23</small>
				</a>
			</li>
		</ul>
		<!-- Navbar -->
		<nav>
			<a id="return" href="#!" class="hide-on-large-screen">
				<svg>
					<path fill="#fff" d="M19 7v4H5.83l3.58-3.59L8 6l-6 6 6 6 1.41-1.41L5.83 13H21V7z" />
				</svg>
			</a>
			<a id="brand-logo" href="./">Media</a>
			<a href="#!" class="breadcrumb">Images</a>
			<a href="#!" class="breadcrumb">Flags</a>
			<a id="navigation-trigger" href="#" onclick="toggleNavigation()" class="hide-on-large-screen">
				<svg>
					<path fill="#fff" d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" />
				</svg>
			</a>
		</nav>
	</header>
	<main>
		<div id="settings">
			<input id="filter" placeholder="Filter" type="text" oninput="filterHTML('#grid-list', 'li', this.value)">
			<input id="size" placeholder="bytes" type="text" class="hide-on-small-screen">
			<button onclick="toggleGrid()">
				View
			</button>
			<button onclick="openModal('readmeModal');">
				ReadMe
			</button>
			<button onClick="openModal('dataModal');">
				Data
			</button>
			<button onclick="openModal('licenseModal');">
				License
			</button>
		</div>

		<!-- Modals -->
		<div id="readmeModal" class="modal">
			<div class="modal-header">
				<h4>README.md</h4>
			</div>
			<div class="modal-content">
				<h1>About this library</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed magna tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sit amet posuere mi. Donec a iaculis nisl. Aliquam maximus id orci nec porta. In hac habitasse platea dictumst. Pellentesque iaculis quis dui nec ultricies. Sed bibendum vitae augue imperdiet aliquet. Aliquam semper felis ac purus placerat porta.</p>
				<p>Ut elementum felis vel ex interdum fermentum sed vel quam. Aliquam in magna vehicula ex ullamcorper facilisis vitae vel magna. Maecenas non facilisis metus. Proin a maURLs malesuada tellus aliquet condimentum. Maecenas sagittis eros eu blandit efficitur. Suspendisse pretium dolor quis justo efficitur pulvinar. Aenean dapibus libero feugiat dolor varius, sit amet lacinia dui porta. Nam scelerisque, nisl id elementum sagittis, lorem nibh pulvinar neque, sit amet rutrum purus arcu quis elit. Praesent sit amet est hendrerit erat pulvinar malesuada maximus sed tellus. Aliquam vehicula est lectus, nec sodales risus tristique tincidunt. Morbi vulputate augue et neque vestibulum, id malesuada lorem feugiat.</p>
				<h2>About this library</h2>
				<p>Nulla eu sodales nisi, quis vestibulum dui. Aliquam nec arcu in velit viverra laoreet vel vitae lorem. Integer malesuada risus a ex feugiat ultrices. Phasellus sed nibh imperdiet, ornare maURLs vel, blandit risus. Phasellus ac pretium augue. Maecenas vulputate arcu non tellus blandit posuere. Pellentesque ut semper augue. In eget eros porta, laoreet libero vel, porttitor nisi. Nulla consequat diam at gravida eleifend. Donec in est non tortor posuere viverra non luctus ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
				<h3>About this library</h3>
				<p>Fusce sodales nulla vitae sollicitudin imperdiet. Sed augue neque, maximus non gravida vitae, tempor sed orci. In eget turpis in lectus dignissim lacinia. Quisque aliquam euismod quam, nec bibendum lorem tristique vel. MaURLs consectetur purus vel turpis vestibulum vehicula. Integer vulputate imperdiet metus vitae finibus. Orci varius natoque penatibus et magnis dis partURLent montes, nascetur ridiculus mus. Nulla eros turpis, ornare eu eros sed, tincidunt placerat diam. Etiam convallis nibh ut tellus laoreet aliquam.</p>
				<p>Donec quis quam rhoncus, feugiat libero in, ullamcorper nulla. Sed sit amet metus quam. Morbi sit amet dolor nec tortor dictum hendrerit. Duis egestas vestibulum lorem sed mattis. Donec ut tincidunt nisi, nec imperdiet nisl. In id odio in arcu congue egestas vestibulum non leo. Quisque lacus nunc, vulputate vel ante et, volutpat maximus sapien. Duis facilisis fringilla aliquet. Maecenas et ligula lectus. Sed ut odio a felis imperdiet auctor. Quisque dapibus fringilla velit quis rutrum.</p>
			</div>
		</div>
		<div id="licenseModal" class="modal">
			<div class="modal-header">
				<h2>LICENSE</h2>
			</div>
			<div class="modal-content">
				<h3>MIT License</h3>
				<p>Copyright (c) 2018 OnlineCores</p>
				<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
				<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
				<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
			</div>
		</div>
		<div id="dataModal" class="modal">
			<div class="modal-header">
				<h2>DATA.csv</h2>
			</div>
			<div class="modal-content">
				<table>
					<thead>
						<tr>
							<th>Belonging</th>
							<th>Alpha-2 code</th>
							<th>Official prop</th>
							<th>Official color</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Aland</td>
							<td>AX</td>
							<td>False</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Denmark</td>
							<td>DK</td>
							<td>True</td>
							<td>False</td>
						</tr>
						<tr>
							<td>Finland</td>
							<td>FI</td>
							<td>True</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Faroe</td>
							<td>FO</td>
							<td>True</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Greenland</td>
							<td>GL</td>
							<td>True</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Iceland</td>
							<td>IS</td>
							<td>True</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Kalmar</td>
							<td>n/a</td>
							<td>Unknown</td>
							<td>Unknown</td>
						</tr>
						<tr>
							<td>Norway</td>
							<td>NO</td>
							<td>True</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Sami</td>
							<td>n/a</td>
							<td>True</td>
							<td>True</td>
						</tr>
						<tr>
							<td>Sweden</td>
							<td>SE</td>
							<td>True</td>
							<td>True</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<ul id="grid-list" class="list">
				<li data-fileName="Aland" data-fileSize="335">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 20">
						<rect width="32" height="20" fill="#004b87" />
						<rect width="6" height="20" x="10" fill="#F8AF00" />
						<rect width="32" height="6" y="7" fill="#F8AF00" />
						<rect width="2" height="20" x="12" fill="#D21034" />
						<rect width="32" height="2" y="9" fill="#D21034" />
					</svg>
					<div class="info">
						<p>Aland</p>
						<p>.svg</p>
						<p>335 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Aland.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Aland.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Aland.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Denmark" data-fileSize="221">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 28">
						<rect width="37" height="28" fill="#cf142b" />
						<rect width="4" height="28" x="12" fill="#fff" />
						<rect width="37" height="4" y="12" fill="#fff" />
					</svg>
					<div class="info">
						<p>Denmark</p>
						<p>.svg</p>
						<p>221 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Denmark.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Denmark.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Denmark.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Finland" data-fileSize="224">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 11">
						<rect width="18" height="11" fill="#fff" />
						<rect width="3" height="11" x="5" fill="#002F6C" />
						<rect width="18" height="3" y="4" fill="#002F6C" />
					</svg>

					<div class="info">
						<p>Finland</p>
						<p>.svg</p>
						<p>224 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Finland.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Finland.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Finland.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Faroe" data-fileSize="330">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 16">
						<rect width="22" height="16" fill="#FFF" />
						<rect width="4" height="16" x="6" fill="#005EB8" />
						<rect width="22" height="4" y="6" fill="#005EB8" />
						<rect width="2" height="16" x="7" fill="#EF3340" />
						<rect width="22" height="2" y="7" fill="#EF3340" />
					</svg>
					<div class="info">
						<p>Faroe</p>
						<p>.svg</p>
						<p>330 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Faroe.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Faroe.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Faroe.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Greenland" data-fileSize="189">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 12">
						<rect width="18" height="12" fill="#fff" />
						<path fill="#c8102e" d="m0,6h18v6H0zm3,0a4,4 0 0,0 8,0a4,4 0 0,0-8,0" />
					</svg>
					<div class="info">
						<p>Greenland</p>
						<p>.svg</p>
						<p>189 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Greenland.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Greenland.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Greenland.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Iceland" data-fileSize="327">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 18">
						<rect width="25" height="18" fill="#02529C" />
						<rect width="4" height="18" x="7" fill="#fff" />
						<rect width="25" height="4" y="7" fill="#fff" />
						<rect width="2" height="18" x="8" fill="#DC1E35" />
						<rect width="25" height="2" y="8" fill="#DC1E35" />
					</svg>
					<div class="info">
						<p>Iceland</p>
						<p>.svg</p>
						<p>327 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Iceland.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Iceland.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Iceland.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Kalmar" data-fileSize="221">
					<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 16 10">
						<rect width="16" height="10" fill="#ffde00" />
						<rect width="2" height="10" x="5" fill="#f00" />
						<rect width="16" height="2" y="4" fill="#f00" />
					</svg>
					<div class="info">
						<p>Kalmar</p>
						<p>.svg</p>
						<p>221 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Kalmar.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Kalmar.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Kalmar.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Norway" data-fileSize="327">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 16">
						<rect width="22" height="16" fill="#cf142b" />
						<rect width="4" height="16" x="6" fill="#fff" />
						<rect width="22" height="4" y="6" fill="#fff" />
						<rect width="2" height="16" x="7" fill="#003896" />
						<rect width="22" height="2" y="7" fill="#003896" />
					</svg>
					<div class="info">
						<p>Norway</p>
						<p>.svg</p>
						<p>327 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Norway.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Norway.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Norway.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Sami" data-fileSize="472">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404 300">
						<rect width="404" height="300" fill="#D52B1E" />
						<rect x="129" width="28" height="300" fill="#007336" />
						<rect x="157" width="28" height="300" fill="#FFCE00" />
						<rect x="185" width="219" height="300" fill="#0035AD" />
						<path d="M 157,54 a 48 48 0 0 0 0,192" fill="none" stroke="#0035AD" stroke-width="16" />
						<path d="M 157,54 a 48 48 0 0 1 0,192" fill="none" stroke="#D52B1E" stroke-width="16" />
					</svg>
					<div class="info">
						<p>Sami</p>
						<p>.svg</p>
						<p>472 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Sami.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Sami.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Sami.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
				<li data-fileName="Sweden" data-fileSize="227">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 10">
						<rect width="16" height="10" fill="#004b87" />
						<rect width="2" height="10" x="5" fill="#F8AF00" />
						<rect width="16" height="2" y="4" fill="#F8AF00" />
					</svg>
					<div class="info">
						<p>Sweden</p>
						<p>.svg</p>
						<p>227 b</p>
					</div>
					<div class="copy hide-on-small-screen">
						<button value="http://www.example.com/path/to/images/flags/Sweden.svg" onclick="openPopup(this.value)">[ ]</button>
						<button value="http://www.example.com/path/to/images/flags/Sweden.svg" onclick="copyToClipbpard(this.value,true)">&#60;/></button>
						<button value="http://www.example.com/path/to/images/flags/Sweden.svg" onclick="copyToClipbpard(this.value,false)">URL</button>
					</div>
				</li>
			</ul>
		</div>
	</main>


	<footer>
		<div class="row">
			<div class="column _25">
				<h3>Footer Content</h3>
				<p>Lorem ipsum dolor ismet amet. Lorem ipsum dolor ismet amet. You can use rows and columns here Lorem ipsum dolor ismet amet. You can use rows and columns here to organize your footer content.</p>
			</div>
			<div class="column">
				<h3>Meta</h3>
				<ul>
					<li>
						<a href="#!">About the app</a>
					</li>
					<li>
						<a href="#!">How to use</a>
					</li>
					<li>
						<a href="#!">Licenses</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			OnlineCores Media © 2018
			<a href="#!">GitHub</a>
		</div>
	</footer>

	<script src="./js/scroll.js"></script>
	<script src="./js/initialize.js"></script>
</body>

</html>
