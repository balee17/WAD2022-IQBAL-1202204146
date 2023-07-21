import { ControllerHandler } from 'controller/Handlers';
import { query } from 'controller/Devices';
import { CategoryType } from 'model/Products';
import type { NextApiRequest, NextApiResponse } from 'next';

export default function handler(req: NextApiRequest, res: NextApiResponse) {
  ControllerHandler(req, res, {
    GET: async () => {
      const roomType = req.query['room-type'] as CategoryType;
      const deviceId = req.query.id as string;

      if (roomType && deviceId) {
        const device = await query.getByIdAndCategory(roomType, parseInt(deviceId, 10));

        return res.status(200).json({ success: true, data: device });
      }

      if (roomType) {
        const devices = await query.getByCategory(roomType);

        return res.status(200).json({ success: true, data: devices });
      }

      const devices = await query.all();

      return res.status(200).json({ success: true, data: devices });
    },

    PUT: async () => {
      const deviceId = req.query.id as string;

      if (!deviceId) {
        return res.status(400).json({ success: false, message: 'Device ID is required' });
      }

      const status = req.body.used_status === 1;
      const updatedDevice = await query.update(parseInt(deviceId, 10), status);

      return res.status(200).json({ success: true, data: updatedDevice });
    }
  });
}
