

TVimageResizer plugin v1.9.4 ��� MODx Evolution 1.0.x

Andchir - http://modx-shopkeeper.ru

----------------------------------------------

������ ��� ���������� �������� �������� �� TV-���������� (��� ����� - Image).
��� ���������� ��������� ��������, ��������� � TV-���������, ����������� �� ������� ������� � ���������� � ������ ����� (����������� � ������������).
����� � �������� TV-��������� ���������� ���� �� ���� �� ����������� ����� ��������.

----------------------------------------------

������������ EasyPhpThumbnail class by JF Nutbroek
http://www.mywebmymail.com/?q=content/easyphpthumbnail-class

������������ Image util library 1.0.0 by Alexey Smallder
http://smallder.ru

----------------------------------------------

���������:

1. ��������� ����� tvimageresizer � ����� � ��������� assets/plugins/.

2. � ������� ���������� �������� "��������" -> "���������� ����������" -> "�������" -> "������� ������".

3. �������� �������:
   TVimageResizer
   
   ��������:
   ������ ��� �������� ����������� ����� �������� ���������� (TV - Image).
   
   ��� ������� (php):
   require MODX_BASE_PATH.'assets/plugins/tvimageresizer/TVimageResizer.inc.php';
   
   ������������ �������:
   &tv_ids=TV IDs;string; &dirs=Thumb folders;string;small~medium &width=Width;string;200~400 &height=Height;string;100~200 &rcorner=Corners percentage of clipping;string; &backgroundColor=Background color;string;#FFFFFF &watermark=Watermark image path (png);string; &watermarkPos=Watermark position;string;90% 90% &cprighttext=Copyright text;string; &quality=Quality;int;90 &mirror=Mirror effect;list;yes,no;no &crop=Cropping;list;yes,no,crop_resized,fill_resized;no &save_o_name=Save only name;list;yes,no;no &rename_images=Rename images;list;yes,no;no &refresh_all_images=Refresh all images;list;yes,no;no
   
   ��������� �������:
   OnBeforeDocFormSave, OnSiteRefresh
   
4. �������� TV-�������� � ����� ����� Image. � ������������ ������� ������� ��� ID. ����� ��������� ����� �������.

----------------------------------------------

������������:

TV IDs - ID TV, ��� ������� ����� ����������� ��������� ������� ����� �������.
Thumb folders - �����, � ������� ����� ��������� ����� ��������. ����� ��������� ��������� ����� ����������� "~" (��� �������).
Width - ������ ����������� ����� ��������. ����� ��������� ��������� ����� ����������� "~".
Height - ������ ����������� ����� ��������. ����� ��������� ��������� ����� ����������� "~".
Cropping - �������� �������� (��������� ����� �� ��������� �������� ��� ����������). crop_resized - ��������� + ��������; fill_resized - ��������������� ���������, �������� ���� ������ (Background color).
Corners percentage of clipping - ��������� ���� (������ ���� � ���������). ����� ��������� ��������� ��� ������ �������� ����� ����������� "~".
Watermark image path (png) - ����������� ������� ���� (���� �� PNG-��������). ����� ��������� ��������� ��� ������ �������� ����� ����������� "~".
Copyright text - �������� ����� �� ��������. ����� ��������� ��������� ��� ������ �������� ����� ����������� "~".
Save only name - ��������� � ���� ������ ��� ����� ��������. ����� ������������ ��� �������� �������� �� ������� �� ������� �����������; 
Quality - �������� ����������� (������ ������).
Background color - ���� ���� (����������� ��� ���������� ����� � ��.).
Rename images - ��������������� ��������. ��� �������� ����� ����������������� � ��������� ����: d.m.y_H.i.
Mirror effect - ������ ����������� ���������.
Refresh all images - ��������� ��� �������� ��� ������� �� ������ "�������� ���" (������������� �������� ������ �� ���� ���, �.�. �������� �������� ������).

----------------------------------------------

����������:

���� ����� ������� ��������� �������� �� ������� �� �������, ����� ������������ �������� Save only name - yes.
������:

<a href="assets/images/[*image*]" target="_blank"><img src="assets/images/small/[*image*]" width="100" height="100" alt="" /></a>

������ ������� - PHx-����������� "replace".

-----------------------------------------------

������������� PHx-������������ "replace":

�������� � ��� ���� ��� ��������
assets/images/small/image.jpg - �������� TV-��������� "image"
assets/images/big/image.jpg - �� �� �������� �� �������� �������

������ �������� ����� ������� ���:
[*image*]
� ������ ����� ����������� "replace" ���:
[*image:replace=`small,big`*]

����� ���������� ������ PHx � ����������� ���� install/replace.phx.php � ����� assets/plugins/phx/modifiers/.

-----------------------------------------------

��� ������ � 1.9.4:

1. ������� ���������� ���� �������� ��� ������� �� ������ "�������� ���" (������������� �������� ������ �� ���� ���, �.�. �������� �������� ������).

2. ���������� ������������ ������ � ���������� �������� ����� 24-������� PNG.

3. �������� �������� "Cropping: fill_resized" - ��������������� ���������, �������� ���� ������ (Background color).

4. �������� ������ ����������� ��������� (Mirror effect).

5. ���������� ������ � �� ����� ������.

