import { db } from 'database/connect';
import { CategoryType } from 'model/Products';
import moment from 'moment';

export const query = {
  all: async () => {
    return new Promise((resolve, reject) => {
      db.all('SELECT * FROM devices', (err, rows) => {
        if (err) {
          return reject(err);
        }
        resolve(rows);
      });
    });
  },

  getByCategory: async (room_type: CategoryType) => {
    return new Promise((resolve, reject) => {
      db.all(`SELECT * FROM devices WHERE room_type='${room_type}'`, (err, rows) => {
        if (err) {
          return reject(err);
        }
        resolve(rows);
      });
    });
  },

  getByIdAndCategory: async (roomType: CategoryType, id: number) => {
    return new Promise((resolve, reject) => {
      db.get(`SELECT * FROM devices WHERE room_type='${roomType}' AND id=${id}`, (err, row) => {
        if (err) {
          return reject(err);
        }
        resolve(row);
      });
    });
  },

  update: async (id: number, status: boolean) => {
    return new Promise((resolve, reject) => {
      const statement = db.prepare(
        `UPDATE devices SET
          used_status=${status ? 1 : 0},
          start_at='${status ? moment().format('YYYY-MM-DD HH:mm:ss') : 'NULL'}'
        WHERE id=?`
      );
      statement.run([id]);

      db.get(`SELECT * FROM devices WHERE id=${id}`, (err, row) => {
        if (err) {
          return reject(err);
        }
        resolve(row);
      });
    });
  }
};
