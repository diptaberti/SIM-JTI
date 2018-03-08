TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `insert_idangket` AFTER INSERT ON `angket`\n FOR EACH ROW begin\nupdate mahasiswa set ID_ANGKET=new.ID_ANGKET where NIM = new.NIM;\ninsert into dapro(NIM) values(new.NIM);\nend'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
