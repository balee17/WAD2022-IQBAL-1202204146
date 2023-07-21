import { db } from 'database/connect';
import { CategoryType } from 'model/Products';

export const query = {
  all: async () => {
    return new Promise((resolve, reject) => {
      db.all('SELECT * FROM rooms', (err, rows) => {
        if (err) {
          return reject(err);
        }
        resolve(rows);
      });
    });
  },

  getByCategory: async (room_type: CategoryType) => {
    return new Promise((resolve, reject) => {
      db.all(`SELECT * FROM rooms WHERE room_type='${room_type}'`, (err, rows) => {
        if (err) {
          return reject(err);
        }
        resolve(rows);
      });
    });
  }
};
