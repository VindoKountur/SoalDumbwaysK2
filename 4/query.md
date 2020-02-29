#   Data dari seluruh table provinsi
##  SELECT * FROM provinsi_tb

#   Data dari seluruh provinsi dan kabupaten
##  SELECT * FROM provinsi_tb INNER JOIN kabupaten_tb ON provinsi_tb.id = kabupaten_tb.provinsi_id

#   Data seluruh provinsi pada pulau tertentu
##  SELECT * FROM provinsi_tb WHERE pulau = 'Sulawesi'