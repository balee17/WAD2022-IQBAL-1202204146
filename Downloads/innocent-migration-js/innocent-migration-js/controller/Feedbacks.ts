import { db } from 'database/connect';
import { FeedbacksType } from 'model/Feedbacks';
import moment from 'moment';

const dateNow = moment().format('YYYY-MM-DD HH:mm:ss');

export const query = {
  all: async () => {
    return new Promise((resolve, reject) => {
      db.all('SELECT * FROM feedbacks', (err, rows) => {
        if (err) {
          return reject(err);
        }
        resolve(rows);
      });
    });
  },

  create: async (deviceId: number, rating: number, comment: number) => {
    return new Promise((resolve, reject) => {
      db.run(
        'INSERT INTO feedbacks(id, device_id, rating, comment, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)',
        [null, deviceId, rating, comment, dateNow, dateNow],
        function (err) {
          if (err) {
            return console.log(err.message);
          }

          db.get('SELECT * FROM feedbacks WHERE id=?', [this.lastID], (error, rows) => {
            if (error) {
              return reject(error);
            }
            resolve(rows);
          });
        }
      );
    });
  }
};
