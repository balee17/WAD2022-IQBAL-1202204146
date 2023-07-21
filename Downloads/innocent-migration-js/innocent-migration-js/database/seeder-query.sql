--
-- File generated with SQLiteStudio v3.4.4 on Mon May 8 11:28:34 2023
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: devices
CREATE TABLE IF NOT EXISTS "devices" (
  "id" integer not null primary key autoincrement,
  "room_id" integer not null,
  "room_type" varchar not null,
  "name" varchar not null,
  "image_id" boolean not null default 'false',
  "start_at" datetime,
  "used_status" boolean not null default 'false',
  "created_at" datetime,
  "updated_at" datetime
);

INSERT INTO devices (id, room_id, room_type, name, image_id, start_at, used_status, created_at, updated_at) VALUES (1, 1, 'training', 'Oculus 1', 1, NULL, FALSE, NULL, NULL);
INSERT INTO devices (id, room_id, room_type, name, image_id, start_at, used_status, created_at, updated_at) VALUES (2, 1, 'training', 'Oculus 2', 2, NULL, FALSE, NULL, NULL);
INSERT INTO devices (id, room_id, room_type, name, image_id, start_at, used_status, created_at, updated_at) VALUES (3, 2, 'tour', 'Oculus 1', 1, NULL, FALSE, NULL, NULL);
INSERT INTO devices (id, room_id, room_type, name, image_id, start_at, used_status, created_at, updated_at) VALUES (4, 2, 'tour', 'Oculus 2', 2, NULL, FALSE, NULL, NULL);
INSERT INTO devices (id, room_id, room_type, name, image_id, start_at, used_status, created_at, updated_at) VALUES (5, 3, 'vrlab', 'Oculus 1', 1, NULL, FALSE, NULL, NULL);
INSERT INTO devices (id, room_id, room_type, name, image_id, start_at, used_status, created_at, updated_at) VALUES (6, 3, 'vrlab', 'Oculus 2', 2, NULL, FALSE, NULL, NULL);

-- Table: feedbacks
CREATE TABLE IF NOT EXISTS "feedbacks" (
  "id" integer not null primary key autoincrement,
  "device_id" integer not null,
  "rating" varchar not null,
  "comment" varchar not null,
  "created_at" datetime,
  "updated_at" datetime
);

INSERT INTO feedbacks (id, device_id, rating, comment, created_at, updated_at) VALUES (1, 1, 5, 'good', NULL, NULL);

-- Table: rooms
CREATE TABLE IF NOT EXISTS "rooms" (
  "id" integer not null primary key autoincrement,
  "name" varchar not null,
  "room_type" varchar not null,
  "room_icon" varchar not null,
  "device_type" varchar not null,
  "time_limit" time not null,
  "created_at" datetime,
  "updated_at" datetime
);

INSERT INTO rooms (id, name, room_type, room_icon, device_type, time_limit, created_at, updated_at) VALUES (1, 'Room Training', 'training', 'assets/images/skating.svg', 'Oculus', '00:10:00', NULL, NULL);
INSERT INTO rooms (id, name, room_type, room_icon, device_type, time_limit, created_at, updated_at) VALUES (2, 'Room Tour', 'tour', 'assets/images/360-degrees.svg', 'Oculus', '00:10:00', NULL, NULL);
INSERT INTO rooms (id, name, room_type, room_icon, device_type, time_limit, created_at, updated_at) VALUES (3, 'VR Box', 'vrlab', 'assets/images/360-degrees.svg', 'Oculus', '00:10:00', NULL, NULL);

CREATE TABLE IF NOT EXISTS "products" (
  "id" integer not null primary key autoincrement,
  "label" varchar not null,
  "link" varchar not null,
  "image" varchar not null,
  "room_type" varchar not null
);

INSERT INTO products (id, label, image, link, room_type) VALUES (1, 'Training K3', '/images/k3.png', '/videos/vr-k3.mp4', 'training');
INSERT INTO products (id, label, image, link, room_type) VALUES (2, 'Training Instalasi Perangkat Indihome', '/images/indihome.png', '/videos/vr-indihome.mp4', 'training');
INSERT INTO products (id, label, image, link, room_type) VALUES (3, 'Tour Sumpah Pemuda', '/images/sumpahpemuda.png', '/videos/vr-pancasila.mp4', 'tour');
INSERT INTO products (id, label, image, link, room_type) VALUES (4, 'Tour Naskah Proklamasi Yang Hilang', '/images/proklamasi.png', '/videos/vr-proklamasi.mp4', 'tour');
INSERT INTO products (id, label, image, link, room_type) VALUES (5, 'Tour Property (Summarecon)', '/images/summarecon.jpg', '/videos/vr-summarecon.mp4', 'vrlab');
INSERT INTO products (id, label, image, link, room_type) VALUES (6, 'Tour Candi', '/images/candi.jpg', '/videos/vr-candi.mp4', 'vrlab');

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
