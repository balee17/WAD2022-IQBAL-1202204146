import { query } from 'controller/Devices';
import { ControllerHandler } from 'controller/Handlers';
import type { NextApiRequest, NextApiResponse } from 'next';

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  ControllerHandler(req, res, {
    POST: async () => {
      const deviceId = req.body.id;
      const usedStatus = req.body.used_status;

      if (![1, 2].includes(deviceId)) {
        return res.status(422).json({ success: false, message: 'Device ID must be 1 OR 2' });
      }

      const values = await query.update(deviceId, usedStatus);

      return res.status(200).json(values);
    }
  });
}
