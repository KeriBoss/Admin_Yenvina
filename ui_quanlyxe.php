<?php		
            // START ROW 3
			startRow(/*$containerid*/"boxconente");
				// START COLUMN 1
				startContentCardColumn(/*$columnHeaderTitle*/"1. THÔNG TIN QUẢN LÝ XE", 12);
						createAllFieldOfOneColumn($table_name, $maintableid, $fieldQuanLyXe, $rowValue);
				endContentCardColumn($containerid);
				// END COLUMN 1
			endRow($containerid);
			// END ROW 3
            // START ROW 3
			startRow(/*$containerid*/"boxconente");
				// START COLUMN 1
				startContentCardColumn(/*$columnHeaderTitle*/"2. THÔNG TIN QUẢN LÝ QUÃNG ĐƯỜNG", 12);
						createAllFieldOfOneColumn($table_name, $maintableid, $fieldQuanLyQuangDuong);
				endContentCardColumn($containerid);
				// END COLUMN 1
			endRow($containerid);
			// END ROW 3

			// START ROW 3
			startRow(/*$containerid*/"boxconente");
				// START COLUMN 1
				startContentCardColumn(/*$columnHeaderTitle*/"3. THÔNG TIN TIỆN ÍCH", 12);
						creatingTableMultiRow($table_name, $maintableid, $fieldQuanLyTienIch, $rowValue);
				endContentCardColumn($containerid);
				// END COLUMN 1
			endRow($containerid);
			// END ROW 3
			
			
?>