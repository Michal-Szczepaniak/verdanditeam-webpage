-- Doctrine Migration File Generated on 2018-05-03 23:53:00

-- Version 20180503235251
CREATE TEMPORARY TABLE __temp__device AS SELECT id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty FROM device;
DROP TABLE device;
CREATE TABLE device (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, sfos_version VARCHAR(255) NOT NULL COLLATE BINARY, have_ota BOOLEAN NOT NULL, xda_link VARCHAR(255) NOT NULL COLLATE BINARY, broken_list VARCHAR(255) NOT NULL COLLATE BINARY, name_pretty VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id));
INSERT INTO device (id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty) SELECT id, name, sfos_version, have_ota, xda_link, broken_list, name_pretty FROM __temp__device;
DROP TABLE __temp__device;
INSERT INTO migration_versions (version) VALUES ('20180503235251');
