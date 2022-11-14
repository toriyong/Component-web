<!DOCTYPE html>
<html>
<title> 회원가입하기 </title>
    <style>
        form fieldset {
            margin: 10px 0px;
        }

        form legend {
            font-size: 18px;
            color: #0066ff;
            font-weight: 600;
        }

        form label.reg {
            font-size: 14px;
            width: 120px;
            float: left;
        }

        form label em {
            font-size: 15px;
            color: red;
            font-weight: 800;
        }

        form ul li {
            list-style: none;
        }

        form fieldset.sendform {
            text-align: center;
        }
    </style>
    <script>
    	function address(){
    		url = "/member/address/address.php";
    		window.open(url,"addr",'width=500,height=400, scrollbars=no, resizable=no');
    	}
    </script>
</head>

<body>
    <body>
        <<form action="2_process.jsp" method="post" />

        <fieldset>
          <legend> 회원가입 </legend>

            <ul>
                <li> <label class="reg" for="new_id"> 아이디 <em> * </em> </label>
                    <input type="text" id="new_id" name="new_id" size="20" autocomplete="on" placeholder="아이디를 입력해주세요." required>
                </li>
                <li> <label class="reg" for="new_pw1"> 비밀번호 <em> * </em> </label>
                    <input type="password" id="new_pw1" name="new_pw1" size="20" placeholder="비밀번호를 입력해주세요."required>
                </li>
                <li> <label class="reg" for="new_pw2"> 비밀번호 확인 <em> * </em> </label>
                    <input type="password" id="new_pw2" name="new_pw2" size="20" placeholder="비밀번호 확인해주세요."required>
                </li>
                <li> <label class="reg" for="user_name"> 이름 <em> * </em> </label>
                    <input type="text" id="user_name" name="user_name" size="20" placeholder="이름을 입력해주세요."required>
                </li>
                <li> <label class="reg" for="user_mail"> 메일주소 <em> * </em> </label>
                    <input type="email" id="user_mail" name="user_mail" size="20" placeholder="메일주소를 입력해주세요."required>
                </li>
                <li> <label class="reg" for="user_tel"> 주 소 </label>
                     <input class=textform type="text" name="join_addr" id="addr" onclick="address();" placeholder="주소를 검색해주세요." required>
                </li>
            </ul>
        </fieldset>

        <fieldset class="sendform">
            <input type="submit" value="가입하기">
            <input type="reset" value="다시쓰기">
        </fieldset>
    </body>
</html>
