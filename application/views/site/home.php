<?php echo View::make('site.inc.meta', get_defined_vars() )->render()?>
	<title><?php echo COMPANY_NAME?></title>
	<meta name="description" content="<?php echo COMPANY_NAME?>" />
	<meta name="keywords" content="<?php echo COMPANY_NAME?>" />
</head>


<body>

	<header class="classy">
		<?php echo View::make('site.inc.header', get_defined_vars() )->render()?>
	</header>

	<div class="wrapper">

		<br /><br />
		<img style="padding: 20px 0" src="img/transform.jpg" />

		<!-- Company Profile -->
		<a name="company_profile"></a>
		<h2>Company Introduction</h2>
		<p class="well-normal" id="company_profile">
			Fun Tech成立于2006年，是一家主要定位于shopping centre的电脑，手机，电玩一站式维修及配件销售连锁店。多年的行业经验，精准的终端客户群定位，以及多盈利点的运营模式，是Fun Tech在经济危机中仍能毅力不到的制胜法宝。
			<br /><br />
			<a class="btn btn-success btn-form-top" href="http://funtech.ie/" target="_blank" style="color:#fff"><i class="icon-white icon-hand-up" title="FunTech Online Shop"></i> FunTech网上商店</a>
		</p>

		<!-- Project Benefits -->
		<a name="project_benefits"></a>
		<h2>项目优势</h2>
		<div class="well-normal" id="project_benefits">
			<p>
				<strong>1. 成熟完善的店面经营管理模式</strong>
				<br />
	   			通过多年的实践经验，我们掌握了一套完善的维修物品物流模式，即便再多的维修物品，也能保证客人的电脑，手机不丢，不乱，及时的回到客人的手中
			</p>

			<p>
				<strong>2. 投资风险小，回报率高</strong>
				<br />
				手机解锁几乎零成本，其它维修一般200%以上的利润，手机套更是将近400-500%的利润，加上您精心的经营管理，盈利百分百。
			</p>
			<p>
				<strong>3. 无进货烦恼，无库存压力</strong>
				<br />
				总公司统一进货，卖一个进一个，使您保持在一个健康的库存水平，避免了独立经营时利润变存货的尴尬局面。
			</p>
			<p>
				<strong>4. 统一品牌运营</strong>
				<br />
				统一装修风格、统一的产品包装，统一运营管理、统一营销策划、统一新产品开发
			</p>
			<p>
				<strong>5. 零烦恼开店</strong>
				<br />
				我们从店面选址，设计，装修，布局直到开业，不需要您出一分钱，一份力，直接上手经营。
			</p>
			<p>
				<strong>6. 维修技术培训及后续支持</strong>
				<br />
				我们拥有一套最前沿，实用的维修教程和开店前的维修体验式培训，会使您在短时间内，掌握当下最流行机型的维修及解锁，让您迅速成为半个维修专家。
			</p>
		</div>

		<a name="application_form"></a>
		<h2>加盟商申请表</h2>

		<div class="well" id="application_form">

			<form class="application_form" method="POST" enctype="multipart/form-data">
				<div class="row-fluid">
					<div class="span12">
						<h4>一、基本资料&nbsp;&nbsp;|&nbsp;&nbsp;Basic information</h4>
					</div>
				</div>

				<table class="table">
	              <tbody>
	                <tr>
	                	<td></td>
	                </tr>
	              </tbody>
	            </table>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						申请人姓名&nbsp;&nbsp;|&nbsp;&nbsp;Name
					</div>
					<div class="span6">
						<input name="name" class="span6" type="text" placeholder="申请人姓名"> <!-- name -->
						<select name="gender" class="span2">
							<option value="1">先生</option> <!-- Mr -->
							<option value="2">小姐</option>	<!-- Miss -->
						</select>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						籍贯&nbsp;&nbsp;|&nbsp;&nbsp;Origin
					</div>
					<div class="span6">
						<input name="origin" class="span8" type="text" placeholder="籍贯">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						出生日期&nbsp;&nbsp;|&nbsp;&nbsp;Date of Birth
					</div>
					<div class="span6">
						<input name="date-of-birth" class="span8" type="text" placeholder="出生日期 | DD-MM-YYYY">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						税号&nbsp;&nbsp;|&nbsp;&nbsp;PPS No.
					</div>
					<div class="span6">
						<input name="pps" class="span8" type="text" placeholder="税号">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						现住址&nbsp;&nbsp;|&nbsp;&nbsp;Address
					</div>
					<div class="span6">
						<textarea name="address" class="span8" rows="3" placeholder="现住址"></textarea>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						QQ
					</div>
					<div class="span6">
						<input name="qq" class="span8" type="text" placeholder="">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						eMail
					</div>
					<div class="span6">
						<input name="email" class="span8" type="text" placeholder="example@email.com">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						电话&nbsp;&nbsp;|&nbsp;&nbsp;Phone
					</div>
					<div class="span6">
						<input name="phone" class="span8" type="text" placeholder="电话">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						移动电话&nbsp;&nbsp;|&nbsp;&nbsp;Mobile
					</div>
					<div class="span6">
						<input name="mobile" class="span8" type="text" placeholder="移动电话">
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						有无同行业经验&nbsp;&nbsp;|&nbsp;&nbsp;Experience in this industry
					</div>
					<div class="span6">
						<select name="exp-in-industry" class="span8">
							<option value="no">No</option>
							<option value="yes">Yes</option>
						</select>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span4">
						二、偏爱经营市场位置&nbsp;&nbsp;|&nbsp;&nbsp;Market location
					</div>
					<div class="span6">
						<select name="market-location" class="span8">
							<option value="Anywhere">Anywhere in Ireland</option>
							<option value="Dublin">Dublin</option>
							<option value="Carlow">Carlow</option>
							<option value="Cavan">Cavan</option>
							<option value="Clare">Clare</option>
							<option value="Cork">Cork</option>
							<option value="Donegal">Donegal</option>
							<option value="Galway">Galway</option>
							<option value="Kerry">Kerry</option>
							<option value="Kildare">Kildare</option>
							<option value="Kilkenny">Kilkenny</option>
							<option value="Laois">Laois</option>
							<option value="Leitrim">Leitrim</option>
							<option value="Limerick">Limerick</option>
							<option value="Longford">Longford</option>
							<option value="Louth">Louth</option>
							<option value="Mayo">Mayo</option>
							<option value="Meath">Meath</option>
							<option value="Monaghan">Monaghan</option>
							<option value="Offaly">Offaly</option>
							<option value="Roscommon">Roscommon</option>
							<option value="Sligo">Sligo</option>
							<option value="Tipperary">Tipperary</option>
							<option value="Waterford">Waterford</option>
							<option value="Westmeath">Westmeath</option>
							<option value="Wexford">Wexford</option>
							<option value="Wicklow">Wicklow</option>
						</select>
					</div>
				</div>

				<input type="hidden" name="file" value="0">

				<br />

				<div class="row-fluid">
					<div class="span12">
						<h4>三、资金与管理&nbsp;&nbsp;|&nbsp;&nbsp;Funding and management</h4>
					</div>
				</div>

				<table class="table">
	              <tbody>
	                <tr>
	                	<td></td>
	                </tr>
	              </tbody>
	            </table>

	            <div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span6">
						可承受月租金&nbsp;&nbsp;|&nbsp;&nbsp;Funds available for rent.
					</div>
					<div class="span4">
						<select name="rent" class="span6">
							<option value="1">&euro;2,000 or less</option>
							<option value="2">&euro;2,000 - &euro;3,000</option>
							<option value="3">&euro;3,000 - &euro;4,000</option>
							<option value="4">&euro;5,000 or more</option>
							<option value="0">any</option>
						</select>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span6">
						是否亲自管理该店铺&nbsp;&nbsp;|&nbsp;&nbsp;Are you going to personally manage the shop?
					</div>
					<div class="span4">
						<select name="management" class="span6">
							<option value="no">No</option>
							<option value="yes">Yes</option>
						</select>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span1"></div><div class="span1"></div>
					<div class="span6">
						从何处了解到公司品牌&nbsp;&nbsp;|&nbsp;&nbsp;Where did you hear about us?
					</div>
					<div class="span4">
						<select name="brand" class="span6">
							<option value="1">0086.ie</option>
							<option value="2">新岛报</option>
							<option value="3">朋友介绍</option>
							<option value="4">店铺</option>
							<option value="0">其它途径</option>
						</select>
					</div>
				</div>

				<br />

				<h4>上传ID | Upload ID</h4>

				<table class="table">
	              <tbody>
	                <tr>
	                	<td>
	                	</td>
	                </tr>
	              </tbody>
	            </table>

	        </form>

			<p style="font-size: 14px;">由于部分内容涉及商业机密，具体操作细节及内容，我们只有核实并确认申请者身份后才能进行详谈，请谅解因此带来的不便，谢谢您的合作。</p>

            <div class="row-fluid" id="file_upload_content">
                <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
                    <p id="f1_upload_process"><img src="img/uploading.gif" /><br/></p>
                    <p id="f1_upload_form" align="center"><br/>
                        <input name="myfile" type="file" size="30" />
                        <input type="submit" name="submitBtn" class="btn hide" value="Upload" />
                    </p>

                    <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
                </form>
            </div>

             <table class="table">
	              <tbody>
	                <tr>
	                	<td>
	                	</td>
	                </tr>
	              </tbody>
	            </table>

            <div class="row-fluid">
				<div class="span4">
					<button name="send" type="submit" class="btn btn-large btn-block btn-primary" type="button"><i class="icon-white icon-envelope"></i> 发送申请表格</button>
				</div>
				<div class="span8 form-message hide">
					<p class="text-warning"></p>
				</div>
			</div>

        </div>

	</div>


	<footer>
		<?php echo View::make('site.inc.footer', get_defined_vars() )->render()?>
	</footer>

	<?php echo View::make('site.inc.scripts', get_defined_vars() )->render()?>

</body>
</html>