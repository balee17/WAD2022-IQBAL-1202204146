import { ControllerHandler } from 'controller/Handlers';
import { query } from 'controller/Rooms';
import { CategoryType } from 'model/Products';
import type { NextApiRequest, NextApiResponse } from 'next';

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  ControllerHandler(req, res, {
    GET: async () => {
      if (!!Object.keys(req.query).length) {
        const roomType = req.query['room-type'] as CategoryType;
        const values = await query.getByCategory(roomType);

        return res.status(200).json({ success: true, data: values });
      }

      const values = await query.all();

      return res.status(200).json({ success: true, data: values });
    }
  });
}
