
*
A3                !        )        0 �
buku InnoDB"utf8mb4*utf8mb4_general_ci2G
id_bukuint0: B R Z b p�Default�Default� � � � � � � 2f

judul_bukuvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2`
isbnvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2d
penerbitvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2h
tahun_terbitvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2d
id_dosenvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � J"
 bukuid_buku" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
fakultas InnoDB"utf8mb4*utf8mb4_general_ci2H
id_fakulint0: B R Z b p�Default�Default� � � � � � � 2f

nama_fakulvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � J'
 fakultasid_fakul" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
matkul InnoDB"utf8mb4*utf8mb4_general_ci2I
	id_matkulint0: B R Z b p�Default�Default� � � � � � � 2g
nama_matkulvarchar�0: B Rutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � J&
 matkul	id_matkul" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �

penelitian InnoDB"utf8mb4*utf8mb4_general_ci2M
id_penelitianint0: B R Z b p�Default�Default� � � � � � � 2a
judulvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2g
bidang_ilmuvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2c
lembagavarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2a
tahunvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2F
id_dosenint: B HR Z b �Default�Default� � � � � � � J.
 
penelitianid_penelitian" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �

pengabdian InnoDB"utf8mb4*utf8mb4_general_ci2I
	id_pengabint0: B R Z b p�Default�Default� � � � � � � 2c
smestervarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2G
	id_matkulint: B HR Z b �Default�Default� � � � � � � 2a
kelasvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2l
perguruan_tinggivarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2F
id_dosenint: B HR Z b �Default�Default� � � � � � � :N
	id_matkul  "
	id_matkul  " ( 2 : B (���������2 :BTREE@ H R Z `j r x J*
 
pengabdian	id_pengab" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
	pengajuan InnoDB"utf8mb4*utf8mb4_general_ci2B
idint0: B R Z b p�Default�Default� � � � � � � 2h
no_pengajuanvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2F
id_dosenint: B HR Z b �Default�Default� � � � � � � 2E
id_userint: B HR Z b �Default�Default� � � � � � � 2l
status_pengajuanvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2b
alasanvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2N
tgl_pengajuandatetime: B HR Z b �Default�Default� � � � � � � 2K

tgl_respondatetime: B HR Z b �Default�Default� � � � � � � J"
 	pengajuanid" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
	publikasi InnoDB"utf8mb4*utf8mb4_general_ci2L
id_publikasiint0: B R Z b p�Default�Default� � � � � � � 2e
	judul_pubvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2b
jurnalvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2f

no_artikelvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2b
volumevarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2a
tahunvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2F
id_dosenint: B HR Z b �Default�Default� � � � � � � J,
 	publikasiid_publikasi" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
riwayat_pendidikan InnoDB"utf8mb4*utf8mb4_general_ci2Q
id_riw_pendidikanint0: B R Z b p�Default�Default� � � � � � � 2l
perguruan_tinggivarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2j
gelar_akademikvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2h
tahun_ijazahvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2c
jenjangvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2F
id_dosenint: B HR Z b �Default�Default� � � � � � � J:
 riwayat_pendidikanid_riw_pendidikan" (���������0 8 RdosenX	`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
user InnoDB"utf8mb4*utf8mb4_general_ci2G
id_userint0: B R Z b p�Default�Default� � � � � � � 2e
	nama_uservarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2d
usernamevarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2d
passwordvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2a
id_roleint: B1=admin, 2=approver, 3=dosenHR Z b �Default�Default� � � � � � � 2`
fotovarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2_
nipvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2`
nidnvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2e
	id_scopusvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2i
program_studivarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2^
jkvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2c
jabatanvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2p
pendidikan_tertinggivarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2o
status_ikatan_kerjavarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2l
status_aktivitasvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2a
emailvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � J"
 userid_user" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � �
tokens InnoDB"utf8mb4*utf8mb4_general_ci2B
idint0: B R Z b p�Default�Default� � � � � � � 2a
tokenvarchar�: B HRutf8mb4Zutf8mb4_general_cib �Default�Default� � � � � � � 2E
id_userint: B HR Z b �Default�Default� � � � � � � 2D
createddate: B HR Z b �Default�Default� � � � � � � J
 tokensid" (���������0 8 RdosenX`h� � � � � �Dynamic� � � � � � � � � � � � � � � � � ����������� � � � � ����������� � � � � � � o
pengabdian_ibfk_1
pengabdian	id_matkul"matkul*	id_matkul08JdosenRdosenX` h rRESTRICTzRESTRICT� � "�
	Diagram 1(0:B
@
buku� �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:F
D
fakultas�� �([2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:D
B
matkul�� �([2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:H
F

penelitian� �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:I
G

pengabdian�� �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:F
D
	pengajuan �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:G
E
	publikasi� �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:Q
O
riwayat_pendidikan�� �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:B
@
user� �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen:C
A
tokens   �(�2$	SSSSSS�?PPPPPP�?�?!      �?8 Bdosen: J�
pengabdian_ibfk_1����$	�������?�������?�������?!      �? *
pengabdian2	id_matkul:matkulB	id_matkulJdosenRdosenXbK��� *Arial Unicode MS0:$	�������?�������?�������?!      �?@ H P RArial Unicode MSX` h p �( 0:
dosen@hPX�N` h 