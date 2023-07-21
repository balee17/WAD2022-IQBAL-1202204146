import { query } from 'controller/Feedbacks';
import { ControllerHandler } from 'controller/Handlers';
import type { NextApiRequest, NextApiResponse } from 'next';

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  ControllerHandler(req, res, {
    POST: async () => {
      const values = await query.create(req.body.device_id, req.body.rating, req.body.comment);

      return res.status(200).json({ success: true, data: values });
    },

    GET: async () => {
      const values = await query.all();

      return res.status(200).json({ success: true, data: values });
    }
  });
}
