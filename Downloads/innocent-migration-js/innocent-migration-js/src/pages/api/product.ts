import { query } from 'controller/Products';
import { ControllerHandler } from 'controller/Handlers';
import type { NextApiRequest, NextApiResponse } from 'next';

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  ControllerHandler(req, res, {
    GET: async () => {
      const values = await query.all();

      return res.status(200).json({ success: true, data: values });
    }
  });
}
